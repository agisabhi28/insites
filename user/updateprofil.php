<?php

	include "koneksi.php";

	if(isset($_POST['save'])){
		$id_profil = $_POST['id_profil'];
		$id_akun = $_POST['id_akun'];
		$nama = $_POST['nama'];
		$partisipan = $_POST['partisipan'];
		$institusi = $_POST['institusi'];
		$education = $_POST['education'];
		$research = $_POST['research'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$fax_numberinstitusi = $_POST['fax_number'];

		$updatesiswa = mysqli_query($koneksi, "UPDATE profil SET id_profil = '$id_profil', id_akun = '$id_akun', nama = '$nama', partisipan = '$partisipan', instirusi = '$instirusi', education = '$education', research = '$research', alamat = '$alamat', no_hp = '$no_hp', no_fax = '$no_fax' WHERE id_profil = '$id_profil'");

		if($updateprofil)
			echo "<script type='text/javascript'> alert('Data profil berhasil diubah')</script>";
		else
			echo "<script type='text/javascript'> alert('Data profil gagal diubah')</script>";

	}
	header("location:index.php");

	// include "viewsiswa.php";
?>
