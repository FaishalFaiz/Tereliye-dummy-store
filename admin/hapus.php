<?php
session_start();
include '../koneksi.php';

// --- CEK KEAMANAN ---
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari database
    $query = "DELETE FROM books WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Buku berhasil dihapus!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus!'); window.location='dashboard.php';</script>";
    }
}
?>