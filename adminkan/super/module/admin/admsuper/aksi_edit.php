<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<script> alert('Untuk Mengakses Admin Super Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
	include "../../../../lib/config.php";
	include "../../../../lib/koneksi.php";

	$id_admin = $_POST['id_admin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
    $level = $_POST['level'];

	$namafile = $_FILES['foto']['name'];
	$lokasifile = $_FILES['foto']['tmp_name'];

  	$uploaddir = "../../../img/";
  	$uploadfile = $uploaddir.$namafile;

  	if(!empty($lokasifile)){
		$queryEdit = mysqli_query($konek, "UPDATE tbl_admin SET username='$username', password = '$password', level_user = '$level', nama = '$nama', email = '$email', foto = '$namafile' WHERE id_admin='$id_admin'");
		if($queryEdit){
		move_uploaded_file($lokasifile, $uploadfile);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$super_url'+'adminweb.php?module=admsuper';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$super_url'+'adminweb.php?module=admsuper';</script>";
		}
	}else{
		$queryEdit = mysqli_query($konek, "UPDATE tbl_admin SET username='$username', password = '$password', level_user = '$level', nama = '$nama', email = '$email' WHERE id_admin='$id_admin'");
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$super_url'+'adminweb.php?module=admsuper';</script>";

	}
}
?>