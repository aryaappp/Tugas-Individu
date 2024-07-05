<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 03</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <center>
        <br>
        <br>
        <form action="hasil.php"method="get">
    <table border="1">
        <tr>
            <td><input type="text"class="form-control" name="nama" placeholder="Masukan Nama Anda"></td>
        </tr>
        <tr>
            <td><input type="number"class="form-control" name="nim" placeholder="Masukan NIM Anda"></td>
        </tr>
        <tr>
            <td><input type="date"class="form-control" name="ttl" placeholder="Masukan Tgl Lahir Anda"></td>
        </tr>
        <tr>
            <td><button type="submit" name="kirim" class="btn btn-success">proses</button></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>