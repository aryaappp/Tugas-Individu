<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form action="prosses.php" method="POST">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br>
        
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        
        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label><br>
        
        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
        
        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>
        
        <label for="jurusan">Jurusan:</label><br>
        <select id="jurusan" name="jurusan" required>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Kedokteran">Kedokteran</option>
        </select><br>
        
        <label for="tahun_masuk">Tahun Masuk:</label><br>
        <input type="number" id="tahun_masuk" name="tahun_masuk" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
