<?php
session_start();

$_SESSION = [];

session_unset();

session_destroy();

echo "<script>
        window.location='index.php';
    </script>";
?>