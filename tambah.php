<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="proses_tambah.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="usia">Usia:</label>
        <input type="number" id="usia" name="usia"><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>
