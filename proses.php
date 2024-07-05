<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $jurusan = $_POST["pendidikan"];
    $tahun_masuk = $_POST["tahun_masuk"];

    echo "<h1>Data Mahasiswa</h1>";
    echo "<table border='1'>";
    echo "<tr><td>NIM</td><td>$nim</td></tr>";
    echo "<tr><td>Nama</td><td>$nama</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>$jenis_kelamin</td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>$tanggal_lahir</td></tr>";
    echo "<tr><td>Tempat Lahir</td><td>$tempat_lahir</td></tr>";
    echo "<tr><td>Jurusan</td><td>$jurusan</td></tr>";
    echo "<tr><td>Tahun Masuk</td><td>$tahun_masuk</td></tr>";
    echo "</table>";
} else {
    echo "Data tidak ditemukan!";
}
?>
