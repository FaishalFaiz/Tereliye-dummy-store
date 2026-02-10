<?php

// fill with your own database connection details
$host = "";
$user = "";
$pass = "";
$db   = "";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal bosku: " . mysqli_connect_error());
}
?>