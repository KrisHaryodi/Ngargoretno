<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Member Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_artikel = $_POST['id_artikel'];
	$judul = $_POST['judul'];
	$tgl = $_POST['tgl'];
	$penulis = $_POST['penulis'];
	$isi = $_POST['isi'];

	$namafile = $_FILES['foto']['name'];
	$lokasifile = $_FILES['foto']['tmp_name'];

  	$uploaddir = "../../img/";
  	$uploadfile = $uploaddir.$namafile;
	
	if(!empty($lokasifile)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_artikel SET artikel_judul = '$judul', artikel_tgl = '$tgl', artikel_penulis = '$penulis', artikel_isi = '$isi', artikel_foto = '$namafile' WHERE id_artikel='$id_artikel'");
		if($queryEdit){
		move_uploaded_file($lokasifile, $uploadfile);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=artikel';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=artikel';</script>";
		}
	}else{
		$queryEdit = mysqli_query($konek,"UPDATE tbl_artikel SET artikel_judul = '$judul', artikel_tgl = '$tgl', artikel_penulis = '$penulis', artikel_isi = '$isi' WHERE id_artikel='$id_artikel'");
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=artikel';</script>";

	}
}
 ?>