<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_kampus";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>