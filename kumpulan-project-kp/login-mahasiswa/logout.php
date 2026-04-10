<?php
session_start();
session_destroy(); // Hapus semua data sesi

// Arahkan kembali ke halaman login
header("Location: login.php");
exit();
?>