<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses produk Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
    error_reporting(0);

	$id_produk = $_POST['id_produk'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$cerita = $_POST['cerita'];
    $deskripsi = $_POST['deskripsi'];
	$link = $_POST['link'];

	//FOTO SAMPUL
    $namafile = $_FILES['sampul']['name'];
	$lokasifile = $_FILES['sampul']['tmp_name'];

  	$uploaddir = "../../img/";
  	$uploadfile = $uploaddir.$namafile;
    
    //FOTO 1
    $namafile1 = $_FILES['foto1']['name'];
	$lokasifile1 = $_FILES['foto1']['tmp_name'];

  	$uploaddir1 = "../../img/";
  	$uploadfile1 = $uploaddir1.$namafile1;
    
    //FOTO 2
    $namafile2 = $_FILES['foto2']['name'];
	$lokasifile2 = $_FILES['foto2']['tmp_name'];

  	$uploaddir2 = "../../img/";
  	$uploadfile2 = $uploaddir2.$namafile2;
    
    //FOTO 3
    $namafile3 = $_FILES['foto3']['name'];
	$lokasifile3 = $_FILES['foto3']['tmp_name'];

  	$uploaddir3 = "../../img/";
  	$uploadfile3 = $uploaddir3.$namafile3;
    
    
	
	if(!empty($lokasifile)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_produk SET produk_nama = '$nama', produk_harga = '$harga', produk_cerita = '$cerita', produk_deskripsi = '$deskripsi', produk_link = '$link', produk_sampul = '$namafile' WHERE id_produk='$id_produk'");
		if($queryEdit){
		move_uploaded_file($lokasifile, $uploadfile);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}
	}
    elseif(!empty($lokasifile1)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_produk SET produk_nama = '$nama', produk_harga = '$harga', produk_cerita = '$cerita', produk_deskripsi = '$deskripsi', produk_link = '$link', produk_foto1 = '$namafile1' WHERE id_produk='$id_produk'");
		if($queryEdit){
		move_uploaded_file($lokasifile1, $uploadfile1);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}
	}
    elseif(!empty($lokasifile2)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_produk SET produk_nama = '$nama', produk_harga = '$harga', produk_cerita = '$cerita', produk_deskripsi = '$deskripsi', produk_link = '$link', produk_foto2 = '$namafile2' WHERE id_produk='$id_produk'");
		if($queryEdit){
		move_uploaded_file($lokasifile2, $uploadfile2);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}
	}
    elseif(!empty($lokasifile3)){
		$queryEdit = mysqli_query($konek,"UPDATE tbl_produk SET produk_nama = '$nama', produk_harga = '$harga', produk_cerita = '$cerita', produk_deskripsi = '$deskripsi', produk_link = '$link', produk_foto3 = '$namafile3' WHERE id_produk='$id_produk'");
		if($queryEdit){
		move_uploaded_file($lokasifile3, $uploadfile3);
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}else{
		echo "<script>alert('Data Gagal Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		}
	}
    else{
		$queryEdit = mysqli_query($konek,"UPDATE tbl_produk SET produk_nama = '$nama', produk_harga = '$harga', produk_cerita = '$cerita', produk_deskripsi = '$deskripsi', produk_link = '$link' WHERE id_produk='$id_produk'");
		echo "<script>alert('Data Berhasil Diedit'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";

	}
}
 ?>