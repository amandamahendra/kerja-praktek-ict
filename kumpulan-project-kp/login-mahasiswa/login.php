<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- Google Font Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Login Mahasiswa UTU</title>
</head>
<body>

<main class="login-container">
  <section class="illustration-side">
    <img src="img/ilustration.png" alt="Ilustrasi Mahasiswa Belajar" />
  </section>

  <section class="form-side">
    <div class="form-wrapper">
      <div class="border-logo">
        <img src="img/logo-utu.png" alt="logo-utu">
      </div>
      <h1>Hai, Mahasiswa!</h1>
      <p>Silakan masukkan NIM dan password Anda untuk melanjutkan.</p>

      <form action="proses_login.php" method="post">
        <div class="input-group">
          <label for="username">NIM atau Email</label>
          <input type="text" id="username" name="username" placeholder="NIM/Email" required />
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required />
        </div>
        
        <div class="input-checkbox">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Ingat Saya</label>

        <a href="#" class="forgot-pw">Lupa password?</a>
        </div>
        
        <button type="submit" class="btn-login">Login</button>
        <button type="button" class="btn-login-google">
          <img src="img/logo-google.svg" alt="logo-google" width="24px">
          Masuk dengan Google
        </button>

      </form>
      <div class="register">
        <p>Tidak mempunyai akun? <a href="#">Daftar akun</a></p>
      </div>
    </div>
  </section>
</main>

</body>
</html>
