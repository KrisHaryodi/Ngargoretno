
 <?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script> alert('Akses ditolak, Anda harus login'); window.location = '../../../index.php';</script>";
} else {
  include "../../../../lib/config.php";
  include "../../../../lib/koneksi.php";

  //ambil data gambar
  $namafile = $_FILES['foto']['name'];
  $lokasifile = $_FILES['foto']['tmp_name'];
  //selain gambar
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
    $level = $_POST['level'];
  //set folder penyimpanan gambar
  $uploaddir = "../../../img/";
  $uploadfile = $uploaddir.$namafile;

  if(move_uploaded_file($lokasifile, $uploadfile)){
  $querySimpan = mysqli_query($konek, "INSERT INTO tbl_admin (username, password, level_user, nama, email, foto) VALUES ('$username','$password','$level','$nama','$email','$namafile')");
      if($querySimpan){
        echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$super_url'+'adminweb.php?module=admsuper'; </script>";     
      }
      else{
        echo "<script> alert ('Data Gagal Ditambahkan'); window.location = '$super_url'+'adminweb.php?module=admsuper';</script>";      
      }
  }else{
      $querySimpan = mysqli_query($konek, "INSERT INTO tbl_admin (username, password, level_user, nama, email) VALUES ('$username','$password','$level','$nama','$email')");
      echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$super_url'+'adminweb.php?module=admsuper'; </script>";
  }
}
?>