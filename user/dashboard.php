<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Winfi Beauty</title>

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
padding:15px 60px;
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
margin-left:25px;
font-weight:500;
}

/* CONTAINER */

.container{
width:90%;
margin:auto;
margin-top:40px;
}

/* GRID PRODUK */

.products{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

/* CARD PRODUK */

.card{
background:white;
border-radius:12px;
box-shadow:0 4px 10px rgba(0,0,0,0.1);
overflow:hidden;
text-align:center;
transition:0.3s;
}

.card:hover{
transform:translateY(-5px);
}

/* GAMBAR PRODUK */

.card img{
width:100%;
height:200px;
object-fit:cover;
}

/* ISI CARD */

.card-body{
padding:15px;
}

.card-body h3{
margin:5px 0;
font-size:18px;
}

.price{
color:#ff4d94;
font-weight:600;
}

.stock{
font-size:13px;
color:#777;
}

/* BUTTON */

.btn{
display:block;
background:#ff4d94;
color:white;
text-decoration:none;
padding:10px;
margin-top:10px;
border-radius:6px;
}

.btn:hover{
background:#ff2f80;
}

/* FOOTER */

.footer{
text-align:center;
margin-top:40px;
font-size:13px;
color:#777;
}

</style>

</head>

<body>

<!-- NAVBAR -->
<div class="navbar">

<div class="logo">Winfi Beauty</div>

<div class="menu">
<a href="../logout.php">Logout</a>
</div>

</div>

<div class="container">

<h2>Produk Winfi Beauty</h2>

<div class="products">

<?php

$data=mysqli_query($conn,"SELECT * FROM produk");

while($p=mysqli_fetch_array($data)){

?>

<div class="card">

<img src="../images/<?php echo $p['gambar']; ?>">

<div class="card-body">

<h3><?php echo $p['nama_produk']; ?></h3>

<p class="price">
Rp <?php echo number_format($p['harga']); ?>
</p>

<p class="stock">
Stok : <?php echo $p['stok']; ?>
</p>

<a class="btn" href="keranjang.php?id=<?php echo $p['id']; ?>">
Beli Sekarang
</a>

</div>

</div>

<?php } ?>

</div>

<div class="footer">

E-Commerce Hana untuk Memenuhi Tugas Mapel Informatika <br>
Create by Winfi

</div>

</div>

</body>
</html>
