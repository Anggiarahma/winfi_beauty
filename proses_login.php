<?php
include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

if($role=="admin"){

$query=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek=mysqli_num_rows($query);

if($cek>0){
header("location:admin/dashboard.php");
}else{
echo "login gagal";
}

}else{

$query=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek=mysqli_num_rows($query);

if($cek>0){
header("location:user/dashboard.php");
}else{
echo "login gagal";
}

}
?>
