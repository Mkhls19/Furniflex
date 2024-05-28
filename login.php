<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FurniFlex</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <div class="login-wrapper">
        <h2>Login</h2>
        <form action="#" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Belum memiliki akun? <a href="register.php">Register</a></p>
        <p><a href="index.php">Beranda</a></p>
    </div>

    <?php
    session_start();

    // Cek apakah ada data yang dikirimkan melalui metode POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $validUsername = "Mkhls";
      $validPassword = "2218055";

      if ($username === "" || $password === "") {
        echo "<script>alert('Isi semua data terlebih dahulu.');</script>";
      } elseif ($username === $validUsername && $password === $validPassword) {
        // Simpan username ke session
        $_SESSION['username'] = $username;
        setcookie('username', $username, time() + (86400 * 30), '/'); // Set cookie dengan nama 'username' dan nilai username pengguna
        echo "<script>alert('Login berhasil!'); window.location.href = 'admin.php';</script>";
        exit();
      } else {
        echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
        exit();
      }
    }
  ?>
  </body>
</html>
