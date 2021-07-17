<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Member Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_wisata = $_POST['id_wisata'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];

	$namafile = $_FILES['foto']['name'];
	$lokasifile = $_FILES['foto']['tmp_name'];

  	$uploaddir = "../../img/";
  	$uploadfile = $uploaddir.$namafile;
	
	if(!empty($lokasifile)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_wisata SET wisata_nama = '$nama', wisata_harga = '$harga', wisata_deskripsi = '$deskripsi', wisata_foto = '$namafile' WHERE id_wisata='$id_wisata'");
		if($queryEdit){
		move_uploaded_file($lokasifile, $uploadfile);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=paketwisata';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=paketwisata';</script>";
		}
	}else{
		$queryEdit = mysqli_query($konek,"UPDATE tbl_wisata SET wisata_nama = '$nama', wisata_harga = '$harga', wisata_deskripsi = '$deskripsi' WHERE id_wisata='$id_wisata'");
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=paketwisata';</script>";

	}
}
 ?>