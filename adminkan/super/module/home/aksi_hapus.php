<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Home Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_profile = $_GET['id_profile'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_profile WHERE id_profile='$id_profile'");

	if ($queryHapus) {
		echo "<script> alert('Data Berhasil Dihapus'); window.location = '$super_url'+'adminweb.php?module=home';</script>";
	} else {
		echo "<script> alert('Data Gagal Dihapus'); window.location = '$super_url'+'adminweb.php?module=home';</script>";
	}
}
 ?>