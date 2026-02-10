<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['add_wishlist'])) {
    $book_id = $_GET['add_wishlist'];
    $user_id = $_SESSION['user_id'];

    $cek = mysqli_query($conn, "SELECT * FROM wishlist WHERE user_id='$user_id' AND book_id='$book_id'");
    if (mysqli_num_rows($cek) == 0) {
        mysqli_query($conn, "INSERT INTO wishlist (user_id, book_id) VALUES ('$user_id', '$book_id')");
        echo "<script>alert('Buku berhasil ditambahkan!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Buku sudah ada di wishlist!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Dashboard - Tere Liye Store</title>
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

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-glass">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-book-half me-2"></i>Toko Tere Liye
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
                        <a href="wishlist.php" class="btn btn-warning btn-sm px-4 rounded-pill fw-bold">
                            <i class="bi bi-heart-fill me-1"></i> Wishlist
                        </a>
                    </li>

                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
                        <li class="nav-item ms-lg-2 my-3 my-lg-0">
                            <a href="admin/dashboard.php" class="btn btn-outline-light btn-sm px-4 rounded-pill">
                                Admin Panel
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item ms-lg-2 my-2 my-lg-0">
                        <a href="logout.php" class="btn btn-outline-light btn-sm px-4 rounded-pill">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4 border-bottom pb-2">Katalog Buku Terbaru 🔥</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM books");
            while ($buku = mysqli_fetch_array($query)) {
            ?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="<?= $buku['gambar'] ?>" class="card-img-top" loading="lazy" alt="<?= $buku['judul'] ?>" style="height: 400px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?= $buku['judul'] ?></h5>
                            <p class="card-text text-muted small"><?= substr($buku['deskripsi'], 0, 100) ?>...</p>
                            <h4 class="text-success fw-bold">Rp <?= number_format($buku['harga']) ?></h4>
                        </div>
                        <div class="card-footer bg-white border-top-0 d-flex justify-content-between pb-3">
                            <a href="dashboard.php?add_wishlist=<?= $buku['id'] ?>" class="btn btn-danger btn-sm">
                                <i class="bi bi-heart"></i> Keranjang +
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>