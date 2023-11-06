<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE siswa SET nama='$nama', usia=$usia, alamat='$alamat' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
