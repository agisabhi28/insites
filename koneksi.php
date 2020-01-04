<?php
$koneksi = mysqli_connect("localhost","root","","insites");

if (mysqli_connect_error()) {
	echo "Koneksi Database Eror".mysqli_connect_error();
}
?>