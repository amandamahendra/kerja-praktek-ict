<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

echo "Selamat Datang " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Dashboard Mahasiswa</title>
    <style>
        body { font-family: 'Poppins', sans-serif; padding: 50px; background-color: #f4f7f6; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 500px; margin: auto; text-align: center; }
        .btn-logout { display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #d9534f; color: white; text-decoration: none; border-radius: 5px; transition: 0.3s;}
        .btn-logout:hover { background-color: #c9302c; }
    </style>
</head>
<body>

    <div class="card">
        <h1>Selamat Datang!</h1>
        <p>Anda berhasil masuk ke sistem akademik.</p>
        <p><strong>NIM Anda: <?php echo $_SESSION['nim']; ?></strong></p> 
        
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

</body>
</html>