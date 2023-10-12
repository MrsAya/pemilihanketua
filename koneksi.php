<?php
// Sesuaikan dengan detail koneksi database Anda
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "evoting";

$host = "localhost";
$username = "root";
$password = "";
$database = "evoting";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
