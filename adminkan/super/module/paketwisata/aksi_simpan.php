
 <?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script> alert('Akses ditolak, Anda harus login'); window.location = '../../index.php';</script>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";

  //ambil data gambar
  $namafile = $_FILES['foto']['name'];
  $lokasifile = $_FILES['foto']['tmp_name'];
  //selain gambar

	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];

  //set folder penyimpanan gambar
  $uploaddir = "../../../img/";
  $uploadfile = $uploaddir.$namafile;

  if(move_uploaded_file($lokasifile, $uploadfile)){
  $querySimpan = mysqli_query($konek, "INSERT INTO tbl_wisata (wisata_nama, wisata_harga, wisata_deskripsi, wisata_foto) VALUES ('$nama', '$harga', '$deskripsi', '$namafile')");
      if($querySimpan){
        echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$super_url'+'adminweb.php?module=paketwisata'; </script>";    
      }
      else{
        echo "<script> alert ('Data Gagal Ditambahkan'); window.location = '$super_url'+'adminweb.php?module=paketwisata';</script>";
      }
  }
    else{
    $querySimpan = mysqli_query($konek, "INSERT INTO tbl_wisata (wisata_nama, wisata_harga, wisata_deskripsi) VALUES ('$nama', '$harga', '$deskripsi')");
    echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$super_url'+'adminweb.php?module=paketwisata'; </script>";
  }
}
?>