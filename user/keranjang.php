<?php
include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM produk WHERE id='$id'");
$p = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>

<title>Pembayaran</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
background:#fff5f8;
}

.container{
width:400px;
margin:auto;
margin-top:50px;
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

h2{
text-align:center;
color:#ff4d94;
}

input,select{
width:100%;
padding:10px;
margin-top:10px;
border-radius:6px;
border:1px solid #ddd;
}

button{
margin-top:15px;
padding:10px;
width:100%;
background:#ff4d94;
border:none;
color:white;
border-radius:6px;
font-size:15px;
cursor:pointer;
}

button:hover{
background:#ff2f80;
}

.success{
background:#e6ffe6;
padding:15px;
border-radius:8px;
margin-top:20px;
text-align:center;
}

.back{
display:block;
text-align:center;
margin-top:15px;
padding:10px;
background:#ff4d94;
color:white;
border-radius:6px;
text-decoration:none;
}

</style>

</head>

<body>

<div class="container">

<h2>Pembayaran</h2>

<p><b>Produk :</b> <?php echo $p['nama_produk']; ?></p>

<p><b>Harga :</b> Rp <?php echo number_format($p['harga']); ?></p>

<form method="POST">

Jumlah Beli
<input type="number" name="jumlah" required>

Metode Pembayaran
<select name="metode">

<option value="Tunai">Tunai</option>
<option value="COD">COD</option>
<option value="Transfer">Transfer</option>

</select>

Jarak Pengiriman (KM)
<input type="number" name="jarak">

Uang Dibayar
<input type="number" name="bayar">

<button name="proses">Bayar</button>

</form>

<?php

if(isset($_POST['proses'])){

$jumlah=$_POST['jumlah'];
$metode=$_POST['metode'];
$jarak=$_POST['jarak'];
$bayar=$_POST['bayar'];

$harga=$p['harga'] * $jumlah;

/* HITUNG ONGKIR */

if($metode=="COD"){

if($jarak<=4){
$ongkir=5000;
}else{
$ongkir=5000+(($jarak-4)*2000);
}

}else{

$ongkir=0;

}

/* TOTAL */

$total=$harga+$ongkir;

$kembalian=$bayar-$total;

/* SIMPAN TRANSAKSI */

$tanggal=date("Y-m-d");

mysqli_query($conn,"INSERT INTO transaksi VALUES
('','1','$total','$metode','$ongkir','$tanggal')
");

/* NOTIF BERHASIL */

echo "<div class='success'>";

echo "<h3>✅ Pembayaran Berhasil</h3>";

echo "Total Harga : Rp ".number_format($harga)."<br>";
echo "Ongkir : Rp ".number_format($ongkir)."<br>";
echo "<b>Total Bayar : Rp ".number_format($total)."</b><br>";
echo "Uang Dibayar : Rp ".number_format($bayar)."<br>";
echo "Kembalian : Rp ".number_format($kembalian)."<br>";

echo "</div>";

echo "<a class='back' href='dashboard.php'>Kembali ke Dashboard</a>";

}

?>

</div>

</body>
</html>
