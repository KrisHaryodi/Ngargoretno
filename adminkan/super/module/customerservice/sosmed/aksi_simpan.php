 <?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script> alert('Akses ditolak, Anda harus login'); window.location = '../../../index.php';</script>";
} else {
  include "../../../../lib/config.php";
  include "../../../../lib/koneksi.php";

	$twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $instagram = $_POST['instagram'];

	$querySimpan = mysqli_query($konek, "INSERT INTO tbl_sosmed (sosmed_twitter, sosmed_facebook, sosmed_youtube, sosmed_instagram) VALUES ('$twitter', '$facebook', '$youtube', '$instagram')");
	if ($querySimpan) {
		echo "<script> alert('Data Berhasil Ditambahkan'); window.location = '$super_url' +'adminweb.php?module=sosmed';</script>";
	} else {
		echo "<script> alert('Data Gagal Ditambahkan'); window.location = '$super_url' +'adminweb.php?module=tambah_sosmed';</script>";
	}
}
 ?>