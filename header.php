<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['pese_id'])) {
    header("Location: index.php");
    exit;
}
  require_once "./koneksi.php";
?>