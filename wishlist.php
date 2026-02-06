<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Hapus Wishlist
if (isset($_GET['hapus'])) {
    $id_wishlist = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM wishlist WHERE id='$id_wishlist' AND user_id='$user_id'");
    header("Location: wishlist.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Wishlist Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>❤️ Buku Favorit Kamu</h2>
            <a href="dashboard.php" class="btn btn-secondary">Kembali Belanja</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Cover</th>
                            <th>Judul Buku</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // JOIN QUERY: Gabungin tabel wishlist sama books
                        $query = mysqli_query($conn, "SELECT wishlist.id as id_wishlist, books.* FROM wishlist
                                                    JOIN books ON wishlist.book_id = books.id
                                                    WHERE wishlist.user_id = '$user_id'");

                        if (mysqli_num_rows($query) == 0) {
                            echo "<tr><td colspan='4' class='text-center py-4'>Belum ada buku yang di-wishlist nih. Pilih-pilih dulu gih! 😅</td></tr>";
                        }

                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td>
                                    <img src="<?= $row['gambar'] ?>" width="60" class="rounded">
                                </td>
                                <td class="fw-bold"><?= $row['judul'] ?></td>
                                <td class="text-success">Rp <?= number_format($row['harga']) ?></td>
                                <td>
                                    <a href="wishlist.php?hapus=<?= $row['id_wishlist'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus dari hati? eh, dari wishlist?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>