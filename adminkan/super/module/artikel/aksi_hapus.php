<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Member Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_artikel = $_GET['id_artikel'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_artikel WHERE id_artikel='$id_artikel'");

	if ($queryHapus) {
		echo "<script> alert('Data Berhasil Dihapus'); window.location = '$super_url'+'adminweb.php?module=artikel';</script>";
	} else {
		echo "<script> alert('Data Gagal Dihapus'); window.location = '$super_url'+'adminweb.php?module=artikel';</script>";
	}
}
 ?>