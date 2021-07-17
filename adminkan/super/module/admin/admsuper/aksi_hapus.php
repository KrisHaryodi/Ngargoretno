<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<script> alert('Untuk Mengakses Admin Super Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
	include "../../../../lib/config.php";
	include "../../../../lib/koneksi.php";

	$id_admin = $_GET['id_admin'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_admin WHERE id_admin='$id_admin'");

	if ($queryHapus) {
		echo "<script> alert('Data Berhasil Dihapus'); window.location = '$super_url'+'adminweb.php?module=admsuper';</script>";
	} else {
		echo "<script> alert('Data Gagal Dihapus'); window.location = '$super_url'+'adminweb.php?module=admsuper';</script>";
	}
}
 ?>