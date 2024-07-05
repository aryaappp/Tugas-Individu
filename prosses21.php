<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    
}
?>
<h2>Data Diri</h2>
<table border=1>
    <tr>
        <td>Nama</td><td><?php echo $nama;?></td>
    </tr>
        <td>Tempat Lahir</td><td><?php echo $tempat_lahir;?></td>
    </tr>
        <td>Tanggal Lahir</td><td><?php echo $tanggal_lahir;?></td>
    </tr>
        <td>Jenis Kelamin</td><td><?php echo $jenis_kelamin;?></td>
    </tr>
        <td>Alamat</td><td><?php echo $alamat;?></td>
    </tr>
        <td>Pendidikan</td><td><?php echo $pendidikan;?></td>
    </tr>
</table>
<a href="Minggu4.php">BACK</a>