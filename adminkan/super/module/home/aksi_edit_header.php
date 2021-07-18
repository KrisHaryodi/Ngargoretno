<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Home Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_header = $_POST['id_header'];

	$namafile = $_FILES['gambar']['name'];
	$lokasifile = $_FILES['gambar']['tmp_name'];

  	// $uploaddir = "../../../img/";
	$uploaddir = "../../img/";
  	$uploadfile = $uploaddir.$namafile;
	
	if(!empty($lokasifile)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_header SET  gambar_header = '$namafile' WHERE id_header='$id_header'");
		if($queryEdit){
		move_uploaded_file($lokasifile, $uploadfile);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$super_url'+'adminweb.php?module=home';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$super_url'+'adminweb.php?module=home';</script>";
		}
	}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$super_url'+'adminweb.php?module=home';</script>";

	}
}
 ?>