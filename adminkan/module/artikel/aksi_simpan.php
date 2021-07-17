
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

	$judul = $_POST['judul'];
	$tgl = $_POST['tgl'];
    $penulis = $_POST['penulis'];
	$isi = $_POST['isi'];

  //set folder penyimpanan gambar
  $uploaddir = "../../img/";
  $uploadfile = $uploaddir.$namafile;

  if(move_uploaded_file($lokasifile, $uploadfile)){
  $querySimpan = mysqli_query($konek, "INSERT INTO tbl_artikel (artikel_judul, artikel_tgl, artikel_penulis, artikel_isi, artikel_foto) VALUES ('$judul', '$tgl', '$penulis', '$isi', '$namafile')");
      if($querySimpan){
        echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=artikel'; </script>";     
      }
      else{
        echo "<script> alert ('Data Gagal Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=artikel';</script>";
      }
  }else{
    $querySimpan = mysqli_query($konek, "INSERT INTO tbl_artikel (artikel_judul, artikel_tgl, artikel_penulis, artikel_isi) VALUES ('$judul', '$tgl', '$penulis', '$isi')");
    echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=artikel'; </script>";
  }
}
?>