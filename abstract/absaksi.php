<?php
include '../koneksi.php';
$title   					= $_POST['title'];
$authors					= $_POST['authors'];
$institution  		= $_POST['institution'];
$isi_abstract	    = $_POST['isi_abstract'];
$keyword 					= $_POST['keyword'];
$topic 						= $_POST['topic'];
$presenter 				= $_POST['presenter'];
$status_presenter = $_POST['status_presenter'];
$tipe						  = $_POST['tipe'];

if (isset($_POST['submit'])) {
	$query = mysqli_query($koneksi, "insert into akun values('', '$title', '$authors', '$institution', '$isi_abstract', '$keyword', '$topic', '$presenter', '$status_presenter', '$tipe' )")or die(mysqli_error());

if ($query) {
	echo "<script>alert('Berhasil Input Abstract'); </script>";
	header('location:index.php');

}else{
	echo "<center> Gagal Daftar </center>";
}

}else{
	echo "password tidak sama <br>";
	header('location:register.php');
}


?>
