<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
