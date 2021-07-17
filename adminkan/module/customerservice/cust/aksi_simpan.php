 <?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script> alert('Akses ditolak, Anda harus login'); window.location = '../../../index.php';</script>";
} else {
  include "../../../../lib/config.php";
  include "../../../../lib/koneksi.php";

	$hp = $_POST['hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

	$querySimpan = mysqli_query($konek, "INSERT INTO tbl_contact (contact_hp, contact_email, contact_alamat) VALUES ('$hp', '$email', '$alamat')");
	if ($querySimpan) {
		echo "<script> alert('Data Berhasil Ditambahkan'); window.location = '$admin_url' +'adminweb.php?module=cust';</script>";
	} else {
		echo "<script> alert('Data Gagal Ditambahkan'); window.location = '$admin_url' +'adminweb.php?module=tambah_cust';</script>";
	}
}
 ?>