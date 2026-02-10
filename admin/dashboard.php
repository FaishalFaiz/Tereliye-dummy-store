<?php
session_start();
include '../koneksi.php';

// --- CEK KEAMANAN ---
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../dashboard.php");
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM books ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Admin Dashboard - Tere Liye Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .navbar-glass {
            background: rgba(33, 37, 41, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top mb-5 navbar-glass">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-book-half me-2"></i>Admin Panel
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-lg-3 my-2 my-lg-0">
                        <span class="text-white">
                            Halo, <b><?= $_SESSION['nama'] ?></b>

                            <?php if ($_SESSION['role'] == 'admin') : ?>
                                <small class="fst-italic text-warning">(Admin)</small>
                            <?php endif; ?>

                            ! 👋
                        </span>
                    </li>

                    <li class="nav-item ms-lg-2 my-3 my-lg-0">
                        <a href="../dashboard.php" class="btn btn-warning btn-sm px-4 rounded-pill fw-bold">
                            User Dashboard
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2 my-2 my-lg-0">
                        <a href="logout.php" class="btn btn-outline-light btn-sm px-4 rounded-pill">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-5shadow-sm border-0">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">📚 Data Buku</h5>
                <a href="tambah.php" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Tambah Buku
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Cover</th>
                                <th>Info Buku</th>
                                <th width="30%">Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($query)) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <img src="<?= $row['gambar']; ?>"
                                            class="rounded shadow-sm"
                                            width="60" height="85"
                                            style="object-fit: cover;"
                                            alt="Cover">
                                    </td>
                                    <td>
                                        <h6 class="mb-0 fw-bold"><?= $row['judul']; ?></h6>
                                        <small class="text-success fw-bold">Rp <?= number_format($row['harga']); ?></small>
                                    </td>
                                    <td>
                                        <small class="text-muted d-block text-truncate" style="max-width: 250px;">
                                            <?= $row['deskripsi']; ?>
                                        </small>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm text-white">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="hapus.php?id=<?= $row['id']; ?>"
                                            onclick="return confirm('Yakin mau hapus buku <?= $row['judul']; ?>?');"
                                            class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>