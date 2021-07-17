<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<script> alert('Untuk Mengakses Format Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
	include "../../../../lib/config.php";
	include "../../../../lib/koneksi.php";

	$id_sosmed = $_GET['id_sosmed'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_sosmed WHERE id_sosmed='$id_sosmed'");

	if ($queryHapus) {
		echo "<script> alert('Data Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=sosmed';</script>";
	} else {
		echo "<script> alert('Data Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=sosmed';</script>";
	}
}
 ?>