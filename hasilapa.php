<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Hasil Input Nilai Mahasiswa</h1>
    <?php
    if (isset($_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['mata_kuliah'], $_POST['nilai1'], $_POST['nilai2'], $_POST['uts'], $_POST['uas'], $_POST['absen'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai1= $_POST['nilai1'] * 0.15;
        $nilai2=$_POST['nilai2'] * 0.15;
        $uts=$_POST['uts'] * 0.20;
        $uas=$_POST['uas'] * 0.30;
        $absen=$_POST['absen'] * 0.20;
        $total_nilai= $nilai1+$nilai2+$uts+$uas+$absen;

        if ($total_nilai >= 0 && $total_nilai < 50) {
            $grade = "E";
        } elseif ($total_nilai >= 50 && $total_nilai < 60) {
            $grade = "D";
        } elseif ($total_nilai >= 60 && $total_nilai < 75) {
            $grade = "C";
        } elseif ($total_nilai >= 75 && $total_nilai < 85) {
            $grade = "B";
        } elseif ($total_nilai >= 85 && $total_nilai <= 100) {
            $grade = "A";
        } else {
            $grade = "Nilai Anda di luar jangkauan";
        }
        
        echo "<div class='alert alert-success' role='alert'>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim<br>";
        echo "Kelas: $kelas<br>";
        echo "Mata Kuliah: $mata_kuliah<br>";
        echo "Nilai1: $nilai1<br>";
        echo "Nilai2: $nilai2<br>";
        echo "UTS: $uts<br>";
        echo "UAS: $uas<br>";
        echo "Absen: $absen<br>";
        echo "Hasil: $total_nilai, Grade = $grade";
        echo "</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Silakan isi form dan submit data.";
        echo "</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>