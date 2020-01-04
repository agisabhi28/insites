<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "select * from akun where username='$username' and password='$password'") or die(mysqli_error());
$cek = mysqli_num_rows($query);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status']   = "login";
	header('location:user/index.php');
}else{
	header('location:index.php?pesan=gagal');
}

?>