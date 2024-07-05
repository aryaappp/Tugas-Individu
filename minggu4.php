<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Diri</title>
</head>
<body>

<h2>Isi Data Dibawah Ini</h2>
<form action="proses.php" method="post">
<pre>
    Nama           :<input type="text" id="nama" name="nama">
    Tempat Lahir   :<input type="text" id="tempat_lahir" name="tempat_lahir">
    Tanggal Lahir  :<input type="date" id="tanggal_lahir" name="tanggal_lahir">
    Jenis Kelamin  :<select type="jenis_kelamin" name="jenis_kelamin">
        <option>Laki-laki</option>
        <option>Perempuan</option>
    </select>
    Alamat         :<textarea id="alamat" name="alamat"></textarea>
    
    Pendidikan     :<select name="pendidikan">
    <option value="-pilih-">
    <option value="S1">S1
    <option value="SMK">SMK
    <option value="SMA">SMK
    <option value="SMP">SMP
    <option value="MTS">MTS
    <option value="SD">SD
    </select>

</pre>
    
    <input type="submit" value="Submit">
    <input type="button" value="Cancel">
</form>

</body>
</html>