<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>

<title>Data Transaksi - Winfi Beauty</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

body{
margin:0;
font-family:'Poppins',sans-serif;
background:#fff5f8;
}

/* NAVBAR */

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 50px;
background:#ff4d94;
color:white;
}

.logo{
font-size:22px;
font-weight:600;
}

.menu a{
color:white;
text-decoration:none;
margin-left:20px;
font-weight:500;
}

/* CONTAINER */

.container{
width:90%;
margin:auto;
margin-top:40px;
}

/* TABLE */

table{
width:100%;
border-collapse:collapse;
background:white;
border-radius:10px;
overflow:hidden;
box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

th{
background:#ff4d94;
color:white;
padding:12px;
}

td{
padding:12px;
text-align:center;
border-bottom:1px solid #eee;
}

.footer{
text-align:center;
margin-top:30px;
font-size:13px;
color:#777;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

<div class="logo">Admin Winfi Beauty</div>

<div class="menu">

<a href="dashboard.php">Produk</a>

<a href="data_user.php">User</a>

<a href="transaksi.php">Transaksi</a>

<a href="../logout.php">Logout</a>

</div>

</div>

<div class="container">

<h2>Data Transaksi Pembelian</h2>

<table>

<tr>

<th>ID Transaksi</th>
<th>ID User</th>
<th>Total Bayar</th>
<th>Metode</th>
<th>Ongkir</th>
<th>Tanggal</th>

</tr>

<?php

$data=mysqli_query($conn,"SELECT * FROM transaksi");

while($d=mysqli_fetch_array($data)){

?>

<tr>

<td><?php echo $d['id']; ?></td>

<td><?php echo $d['id_user']; ?></td>

<td>Rp <?php echo number_format($d['total']); ?></td>

<td><?php echo $d['metode']; ?></td>

<td>Rp <?php echo number_format($d['ongkir']); ?></td>

<td><?php echo $d['tanggal']; ?></td>

</tr>

<?php } ?>

</table>

<div class="footer">

E-Commerce Hana untuk Memenuhi Tugas Mapel Informatika <br>
Create by Winfi

</div>

</div>

</body>
</html>
