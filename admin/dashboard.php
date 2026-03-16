<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard - Winfi Beauty</title>

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

/* BUTTON TAMBAH */

.btn-tambah{
display:inline-block;
background:#ff4d94;
color:white;
padding:10px 18px;
border-radius:6px;
text-decoration:none;
margin-bottom:20px;
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

img{
border-radius:6px;
}

/* BUTTON AKSI */

.btn-edit{
background:#4CAF50;
color:white;
padding:6px 12px;
border-radius:5px;
text-decoration:none;
}

.btn-delete{
background:#f44336;
color:white;
padding:6px 12px;
border-radius:5px;
text-decoration:none;
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

<div class="navbar">

<div class="logo">Admin Winfi Beauty</div>

<div class="menu">

<a href="data_user.php">User</a>

<a href="transaksi.php">Transaksi</a>

<a href="../logout.php">Logout</a>

</div>

</div>

<div class="container">

<h2>Manajemen Produk</h2>

<a class="btn-tambah" href="tambah_produk.php">
+ Tambah Produk
</a>

<table>

<tr>

<th>images</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>

</tr>

<?php

$data=mysqli_query($conn,"SELECT * FROM produk");

while($d=mysqli_fetch_array($data)){

?>

<tr>

<td>
<img src="../images/<?php echo $d['gambar']; ?>" width="80">
</td>

<td><?php echo $d['nama_produk']; ?></td>

<td>Rp <?php echo number_format($d['harga']); ?></td>

<td><?php echo $d['stok']; ?></td>

<td>

<a class="btn-edit" href="edit_produk.php?id=<?php echo $d['id']; ?>">
Edit
</a>

<a class="btn-delete" href="delete.php?id=<?php echo $d['id']; ?>">
Delete
</a>

</td>

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
