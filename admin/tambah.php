<?php
session_start();
include '../koneksi.php';

// --- CEK KEAMANAN ---
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

if (isset($_POST['simpan'])) {
    $judul     = $_POST['judul'];
    $harga     = $_POST['harga'];
    $gambar    = $_POST['gambar']; // Input URL String
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']); // Amanin text panjang

    $query = "INSERT INTO books (judul, harga, gambar, deskripsi) VALUES ('$judul', '$harga', '$gambar', '$deskripsi')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Buku berhasil ditambahkan!'); window.location='dashboard.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">➕ Tambah Buku Baru</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-control" required placeholder="Contoh: Bumi">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control" required placeholder="Contoh: 95000">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">URL Gambar (Link)</label>
                        <input type="text" name="gambar" class="form-control" required placeholder="https://cdn.gramedia.com/...">
                        <div class="form-text">Copy link gambar dari internet dan paste di sini.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required placeholder="Sinopsis buku..."></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="dashboard.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" name="simpan" class="btn btn-primary px-4">Simpan Data</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>