<?php
include '../koneksi.php';
$username   = $_POST['username'];
$password	= $_POST['password'];
$password1  = $_POST['password1'];
$akses	    = $_POST['akses'];

if ($password==$password1) {
	$query = mysqli_query($koneksi, "insert into akun values('', '$username', '$password', '$akses' )")or die(mysqli_error());

if ($query) {
	echo "<script>alert('Berhasil Daftar'); </script>";
	header('location:../index.php');

}else{
	echo "<center> Gagal Daftar </center>";
}

}else{
	echo "password tidak sama <br>";
	header('location:register.php');
}


?>