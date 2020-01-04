<!DOCTYPE >
<html>
<head>
	<title>Daftar Akun INSITES</title>
</head>
<body>
	<h3 align="center">Registrasi Akun INSITES </h3>
	<?php
		include '../koneksi.php';
	?>
	<form method="post" action="registeraksi.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required="Username Harus diisi" placeholder="gunakan e-mail"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" required="Password Harus Diisi"></td>
			</tr>
			<tr>
				<td>Re-type Password</td>
				<td><input type="text" name="password1" required="Password Harus Diisi"></td>
			</tr>
			<tr>
				<td>Akses</td>
				<td><input type="radio" name="akses" value="user">User</td>
				<td><input type="radio" name="akses" value="admin" disabled="">Admin</td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Daftar" ></td>
			</tr>
		</table>
		
	</form>

</body>
</html>
