<!DOCTYPE html>
<html>
<head>
	<title>INSITES 2045</title>
</head>
<body>
	<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "<script>alert('Login Gagal ! Username dan Password salah')</script>";
			}elseif ($_GET['pesan'] == "logout") {
				echo "<script>alert('Anda Berhasil Logout')</script>";
			}elseif ($_GET['pesan'] == "belum_login") {
				echo "Anda Harus Login dulu";
			}
		}
	?>
	<h3><marquee> Welcome to INSITES 2045 </marquee></h3>
	<center><h2><a href="login.php">LOGIN</a> || <a href="akun/register.php">DAFTAR</a></h2></center> 
	

</body>
</html>