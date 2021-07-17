<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Home Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_profile = $_POST['id_profile'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$namafile = $_FILES['gambar']['name'];
	$lokasifile = $_FILES['gambar']['tmp_name'];

  	$uploaddir = "../../img/";
  	$uploadfile = $uploaddir.$namafile;
	
	if(!empty($lokasifile)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_profile SET profile_judul = '$judul', profile_isi = '$isi', profile_foto = '$namafile' WHERE id_profile='$id_profile'");
		if($queryEdit){
		move_uploaded_file($lokasifile, $uploadfile);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=home';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=home';</script>";
		}
	}else{
		$queryEdit = mysqli_query($konek,"UPDATE tbl_profile SET profile_judul = '$judul', profile_isi = '$isi' WHERE id_profile='$id_profile'");
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=home';</script>";

	}
}
 ?>