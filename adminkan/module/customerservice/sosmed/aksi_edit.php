<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<script> alert('Untuk Mengakses Pemula Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
	include "../../../../lib/config.php";
	include "../../../../lib/koneksi.php";

	$id_sosmed = $_POST['id_sosmed'];
	$twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $instagram = $_POST['instagram'];

	$queryEdit = mysqli_query($konek, "UPDATE tbl_sosmed SET sosmed_twitter='$twitter', sosmed_facebook='$facebook', sosmed_youtube='$youtube', sosmed_instagram='$instagram' WHERE id_sosmed='$id_sosmed'");
	if ($queryEdit) {
		echo "<script> alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=sosmed';</script>";
	} else {
		echo "<script> alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=edit_sosmed&id_sosmed='+'$id_sosmed';</script>";
	}
}
 ?>