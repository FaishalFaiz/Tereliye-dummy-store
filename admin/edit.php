<?php
session_start();
include '../koneksi.php';

// --- CEK KEAMANAN ---
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM books WHERE id = '$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $judul     = $_POST['judul'];
    $harga     = $_POST['harga'];
    $gambar    = $_POST['gambar'];
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $query = "UPDATE books SET judul='$judul', harga='$harga', gambar='$gambar', deskripsi='$deskripsi' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='dashboard.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow border-0">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">✏️ Edit Buku</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-control" value="<?= $row['judul']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control" value="<?= $row['harga']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">URL Gambar</label>
                        <input type="text" name="gambar" class="form-control" value="<?= $row['gambar']; ?>" required>
                        <div class="mt-2">
                            <img src="<?= $row['gambar']; ?>" width="100" class="rounded border">
                            <small class="d-block text-muted">Gambar Saat Ini</small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4" required><?= $row['deskripsi']; ?></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="dashboard.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" name="update" class="btn btn-warning px-4">Update Data</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>