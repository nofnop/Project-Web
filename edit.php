<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Data Siswa</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>

    <?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET['id'];

        $sql = "SELECT * FROM siswa WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
    ?>
            <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br>

                <label for="usia">Usia:</label>
                <input type="number" id="usia" name="usia" value="<?php echo $row['usia']; ?>"><br>

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat"><?php echo $row['alamat']; ?></textarea><br>

                <input type="submit" value="Simpan">
            </form>
    <?php
        } else {
            echo "Data siswa tidak ditemukan.";
        }
    }

    $conn->close();
    ?>
</body>
</html>
