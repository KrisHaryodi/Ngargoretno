<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Member Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_produk = $_GET['id_produk'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_produk WHERE id_produk='$id_produk'");

	if ($queryHapus) {
		echo "<script> alert('Data Berhasil Dihapus'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
	} else {
		echo "<script> alert('Data Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
	}
}
 ?>