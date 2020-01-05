<!DOCTYPE html>
<html>
<head>
	<title>Profil || Edit Profil</title>
</head>
<body>
<center>
<h4 align="left"><a href="index.php">KEMBALI</a>
<h2>Profil</h2>
<?php
		include 'koneksi.php';
		$id_profil = $_GET['id_profil'];
		$dataprofil = mysqli_query($koneksi, "SELECT * FROM profil WHERE id_profil ='$id_profil'");
		while ($dp = mysqli_fetch_array($dataprofil)) {
	?>
<form method="post" action="updateprofil.php">
<table>
	<tr>
		<td>Nama </td>
		<td>
			<input type="hidden" name="id_akun" value=<?php echo $dp['id_akun']; ?>>
			<input type="hidden" name="id_profil" value=<?php echo $dp['id_profil']; ?>>
			<input type="text" name="nama">
		</td>
	</tr>
	<tr>
		<td>Partisipan</td>
		<td>
			<select name="partisipan">
				<option value="Presenter">Presenter</option>
				<option value="Non-Presenter">Non-Presenter</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Institusi</td>
		<td><input type="text" name="institusi" value=<?php echo $dp['institusi']; ?>></td>
	</tr>
	<tr>
		<td>Education</td>
		<td><input type="text" name="education" value=<?php echo $dp['education']; ?>></td>
	</tr>
	<tr>
		<td>Research</td>
		<td><input type="text" name="research" value=<?php echo $dp['research']; ?>></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value=<?php echo $dp['alamat']; ?>></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td><input type="text" name="no_hp" value=<?php echo $dp['no_hp']; ?>></td>
	</tr>
	<tr>
		<td>Fax Number</td>
		<td><input type="text" name="fax_number" value=<?php echo $dp['fax_number']; ?>></td>
	</tr>
	<!-- <tr>
		<td>Profil Picture</td>
		<td><input type="file" name="gambar_profil" accept="image/*"></td>
	</tr> -->
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="save" value="Save">
		</td>
	</tr>
</table>
</form>
<?php
}
?>
</center>
</body>
</html>
