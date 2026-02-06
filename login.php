<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 1. Cari dulu usernamenya ada gak
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // 2. Kalau username ketemu
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // 3. Cek passwordnya cocok gak sama hash di database
        if (password_verify($password, $row['password'])) {
            // Password bener! Set Session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['nama'] = $row['nama_lengkap'];

            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Username atau password salah!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login - Tere Liye Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">

    <div class="card shadow p-4 mx-3" style="max-width: 600px; width: 100%; border-radius: 15px;">
        <div class="card-body">
            <h3 class="text-center mb-4 fw-bold">Masuk Dulu 👋</h3>

            <?php if(isset($error)) : ?>
                <div class="alert alert-danger text-center"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn btn-dark w-100">Mulai Belanja</button>
            </form>
            <p class="text-center mt-3 text-muted">Belum punya akun? <a href="register.php">Daftar dulu</a></p>
        </div>
    </div>

</body>
</html>