<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - FurniFlex</title>
    <link rel="stylesheet" href="css/style_register.css">
</head>
<body>
    <div class="register-wrapper">
        <h2>Register</h2>
        <form action="#" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required> 
            <button type="submit">Register</button>
        </form>
        <p>Sudah memiliki akun? <a href="login.html">Login</a></p>
        <p><a href="index.html">Beranda</a></p>
    </div>
    <script>
        function RegisterForm() {
        var username = document.getElementsByName("username")[0].value;
        var email = document.getElementsByName("email")[0].value;
        var password = document.getElementsByName("password")[0].value;
        var konfirmasiPassword = document.getElementsByName("confirm_password")[0].value; // Sesuaikan dengan nama input konfirmasi password

        if (username === "" || email === "" || password === "" || konfirmasiPassword === "") {
        alert("Isi semua data terlebih dahulu.");
        return false;
        }
        if (password !== konfirmasiPassword) {
        alert("Password dan konfirmasi password harus sama.");
        return false;
        }
        alert("Register berhasil! Silahkan login.");
        return true;
        }
    </script>
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
                echo "<script>alert('Register berhasil! Silahkan login.'); window.location.href = 'login.php';</script>";
                exit();
            } else {
                echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
                exit();
            }
        }
    ?>
</body>
</html>
