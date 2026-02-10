<?php
session_start();

// 1. Kosongkan array session
$_SESSION = [];

// 2. Hapus memori session di server
session_unset();

// 3. Hapus Cookie di Browser (PENTING!) 🍪
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 4. Hancurkan session fisik di server
session_destroy();

echo "<script>
        alert('Anda berhasil logout!');
        window.location='index.php'; // Atau login.php
    </script>";
?>