<?php include "../koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>

<title>Tambah Produk</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
background:#fff5f8;
}

.container{
width:400px;
margin:auto;
margin-top:60px;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

h2{
text-align:center;
color:#ff4d94;
}

input{
width:100%;
padding:10px;
margin-top:8px;
margin-bottom:15px;
border:1px solid #ddd;
border-radius:6px;
}

button{
width:100%;
padding:10px;
background:#ff4d94;
border:none;
color:white;
border-radius:6px;
cursor:pointer;
}

button:hover{
background:#ff2f80;
}

.back{
display:block;
text-align:center;
margin-top:15px;
text-decoration:none;
color:#ff4d94;
}

.success{
background:#e6ffe6;
padding:10px;
border-radius:6px;
margin-top:15px;
text-align:center;
}

</style>

</head>

<body>

<div class="container">

<h2>Tambah Produk</h2>

<form method="POST" enctype="multipart/form-data">

<label>Nama Produk</label>
<input type="text" name="nama" required>

<label>Harga</label>
<input type="number" name="harga" required>

<label>Stok</label>
<input type="number" name="stok" required>

<label>Diskon</label>
<input type="number" name="diskon" required>

<label>Gambar Produk</label>
<input type="file" name="gambar" required>

<button name="simpan">Simpan Produk</button>

</form>

<a class="back" href="dashboard.php">← Kembali ke Dashboard</a>

<?php

if(isset($_POST['simpan'])){

$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$diskon=$_POST['diskon'];

$gambar=$_FILES['gambar']['name'];
$tmp=$_FILES['gambar']['tmp_name'];

/* upload gambar */

move_uploaded_file($tmp,"../images/".$gambar);

/* simpan ke database */

mysqli_query($conn,"INSERT INTO produk VALUES('','$nama','$harga','$stok','$diskon','$gambar')");

echo "<div class='success'>Produk berhasil ditambahkan ✅</div>";

}

?>

</div>

</body>
</html>
