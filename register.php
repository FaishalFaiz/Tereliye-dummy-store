<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 🔒 INI DIA KUNCINYA: Hashing Password
    // Password 'rahasia' bakal berubah jadi kode acak panjang
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Cek username udah ada belum
    $cek = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username sudah digunakan!');</script>";
    } else {
        // Masukin ke database pake password yang udah di-hash
        $query = "INSERT INTO users (username, password, nama_lengkap) VALUES ('$username', '$password_hash', '$nama')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Akun berhasil dibuat. Silakan login.'); window.location='login.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Akun - Tere Liye Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card shadow p-4 mx-3" style="max-width: 600px; width: 100%; border-radius: 15px;">
        <div class="card-body">
            <h3 class="text-center mb-4 fw-bold">Daftar Dulu Gan 🚀</h3>

            <form method="POST">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="register" class="btn btn-dark w-100">Buat Akun</button>
            </form>
            <p class="text-center mt-3 text-muted">Udah punya akun? <a href="login.php">Login sini</a></p>
        </div>
    </div>

</body>
</html>