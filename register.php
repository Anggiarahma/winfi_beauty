<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>

<title>Register Winfi Beauty</title>

<link rel="stylesheet" href="css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>

<div class="container">

<div class="login-card">

<h1>Registrasi Pembeli</h1>

<p class="subtitle">Join with Winfi Beauty 💖</p>

<form method="POST">

<input type="text" name="nama" placeholder="Nama Lengkap" required>

<select name="gender">

<option value="">Pilih Jenis Kelamin</option>
<option>Laki-laki</option>
<option>Perempuan</option>

</select>

<input tyoe="text" name="alamat" placeholder="Alamat Lengkap">

<input type="text" name="wa" placeholder="Nomor WhatsApp">

<button name="daftar">Daftar</button>

</form>

<p class="register">
Sudah punya akun?
<a href="login.php">Login disini</a>
</p>

<p class="footer">
E-Commerce Hana untuk Memenuhi Tugas Mapel Informatika <br>
Create by Winfi
</p>

</div>

</div>

</body>
</html>

<?php

if(isset($_POST['daftar'])){

$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$wa=$_POST['wa'];

$username=$nama;
$password=$nama."2026";

mysqli_query($conn,"INSERT INTO users VALUES('','$nama','$gender','$alamat','$wa','$username','$password')");

header("Location: login.php");

}
?>
