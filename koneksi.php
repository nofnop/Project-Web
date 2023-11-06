<?php
$servername = "localhost";
$username = "username_mysql";
$password = "password_mysql .";
$dbname = "sekolah";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<?php
$host = "localhost";
$username = "username_db";
$password = "";
$database = "nama_database";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
