<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<script> alert('Untuk Mengakses Home Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

    //ambil data gambar
    $namafile = $_FILES['gambar']['name'];
    $lokasifile = $_FILES['gambar']['tmp_name'];
    
	$judul = $_POST['judul'];
    $isi = $_POST['isi'];
    
    $uploaddir = "../../img/";
    $uploadfile = $uploaddir.$namafile;
	
    if(move_uploaded_file($lokasifile, $uploadfile)){
        $querySimpan = mysqli_query($konek, "INSERT INTO tbl_profile (profile_judul, profile_isi, profile_foto) VALUES ('$judul', '$isi', '$namafile')");
      if($querySimpan){
        echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=home';</script>";     
      }
      else{
        echo "<script> alert ('Data Gagal Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=home';</script>";
      }
  }else{
        $querySimpan = mysqli_query($konek, "INSERT INTO tbl_profile (profile_judul, profile_isi, profile_foto) VALUES ('$judul', '$isi', '$namafile')");
    echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=home';</script>";
  }
}
?>