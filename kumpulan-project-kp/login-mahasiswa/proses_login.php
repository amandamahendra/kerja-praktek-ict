<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * FROM mahasiswa WHERE nim='$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($password == $row['password']) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['nim'] =$row['nim'];
    header("Location: dashboard.php");
} else {
    echo "NIM atau Password salah";
}
?>