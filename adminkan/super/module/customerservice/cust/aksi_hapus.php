<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<script> alert('Untuk Mengakses Format Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
	include "../../../../lib/config.php";
	include "../../../../lib/koneksi.php";

	$id_contact = $_GET['id_contact'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_contact WHERE id_contact='$id_contact'");

	if ($queryHapus) {
		echo "<script> alert('Data Berhasil Dihapus'); window.location = '$super_url'+'adminweb.php?module=cust';</script>";
	} else {
		echo "<script> alert('Data Gagal Dihapus'); window.location = '$super_url'+'adminweb.php?module=cust';</script>";
	}
}
 ?>