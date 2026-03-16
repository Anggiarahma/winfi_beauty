<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Winfi Beauty</title>

<link rel="stylesheet" href="css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>

<div class="container">

<div class="login-card">

<h1>Winfi Beauty</h1>

<p class="subtitle">Glow Your Beauty Everyday ✨</p>

<form method="POST" action="proses_login.php">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<select name="role">

<option value="admin">Admin</option>
<option value="user">Pembeli</option>

</select>

<button type="submit">Login</button>

</form>

<p class="register">
Belum punya akun?
<a href="register.php">Daftar disini</a>
</p>

<p class="footer">
E-Commerce Hana untuk Memenuhi Tugas Mapel Informatika <br>
Create by Winfi
</p>

</div>

</div>

</body>
</html>
