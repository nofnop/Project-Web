<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>

    <a href="tambah.php">Tambah Siswa Baru</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM siswa";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['usia'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $row['id'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "Tidak ada data siswa.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
