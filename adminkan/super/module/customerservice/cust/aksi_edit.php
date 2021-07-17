<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<script> alert('Untuk Mengakses Pemula Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
	include "../../../../lib/config.php";
	include "../../../../lib/koneksi.php";

	$id_contact = $_POST['id_contact'];
	$hp = $_POST['hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

	$queryEdit = mysqli_query($konek, "UPDATE tbl_contact SET contact_hp='$hp', contact_email='$email', contact_alamat='$alamat' WHERE id_contact='$id_contact'");
	if ($queryEdit) {
		echo "<script> alert('Data Berhasil Diedit'); window.location = '$super_url'+'adminweb.php?module=cust';</script>";
	} else {
		echo "<script> alert('Data Gagal Diedit'); window.location = '$super_url'+'adminweb.php?module=edit_cust&id_cust='+'$id_cust';</script>";
	}
}
 ?>