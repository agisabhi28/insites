<!DOCTYPE html>
<html>
<head>
	<title>Profil || Edit Profil</title>
</head>
<body>
<center>
<h4 align="left"><a href="index.php">KEMBALI</a>
<h2>Profil</h2>
<table>
	<tr>
		<td>Nama </td>
		<td>
			<input type="hidden" name="id_akun" disabled>
			<input type="hidden" name="id_profil" disabled>
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
		<td><input type="text" name="institusi"></td>
	</tr>
	<tr>
		<td>Education</td>
		<td><input type="text" name="education"></td>
	</tr>
	<tr>
		<td>Research</td>
		<td><input type="text" name="research"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td><input type="text" name="no_hp"></td>
	</tr>
	<tr>
		<td>Fax Number</td>
		<td><input type="text" name="fax_number"></td>
	</tr>
	<tr>
		<td>Profil Picture</td>
		<td><input type="file" name="gambar_profil" accept="image/*"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="save" value="Save">
		</td>
	</tr>
</table>
</center>
</body>
</html>
