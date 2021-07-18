
 <?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script> alert('Akses ditolak, Anda harus login'); window.location = '../../index.php';</script>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";
  error_reporting(0);
  
  //ambil data foto sampul
  $namafile = $_FILES['sampul']['name'];
  $lokasifile = $_FILES['sampul']['tmp_name'];

  //ambil data foto produk 1
  $namafile1 = $_FILES['foto1']['name'];
  $lokasifile1 = $_FILES['foto1']['tmp_name'];

  //ambil data foto produk 2
  $namafile2 = $_FILES['foto2']['name'];
  $lokasifile2 = $_FILES['foto2']['tmp_name'];

  //ambil data foto produk 3
  $namafile3 = $_FILES['foto3']['name'];
  $lokasifile3 = $_FILES['foto3']['tmp_name'];
  
    
  //selain gambar
  $id_produk = $_POST['id_produk'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
  $cerita = $_POST['cerita'];
  $deskripsi = $_POST['deskripsi'];
	$link = $_POST['link'];

  //set folder penyimpanan foto sampul
  $uploaddir = "../../../img/";
  $uploadfile = $uploaddir.$namafile;

  //set folder penyimpanan foto produk 1
  $uploaddir1 = "../../../img/";
  $uploadfile1 = $uploaddir1.$namafile1;

  //set folder penyimpanan foto produk 2
  $uploaddir2 = "../../../img/";
  $uploadfile2 = $uploaddir2.$namafile2;

  //set folder penyimpanan foto produk 3
  $uploaddir3 = "../../../img/";
  $uploadfile3 = $uploaddir3.$namafile3;
  

  //set folder penyimpanan gambar
    
  // $jumlah = count($_FILES['gambar']['name']);
	// 	if ($jumlah > 0) {
	// 		$gambar = array();
	// 		for ($i=0; $i < $jumlah; $i++) { 
	// 			$file_name = $_FILES['gambar']['name'][$i];
	// 			$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
	// 			move_uploaded_file($tmp_name, "../../../img/".$file_name);
	// 			$gambar[$i] = $file_name; 								
	// 		}
    
  //   mysqli_query($konek, "INSERT INTO tbl_produk (produk_nama, produk_harga, produk_cerita, produk_deskripsi, produk_link, produk_sampul, produk_foto1, produk_foto2, produk_foto3) VALUES ('$nama', '$harga', '$cerita', '$deskripsi', '$link', '$gambar[0]', '$gambar[1]', '$gambar[2]', '$gambar[3]')");
     
	
  //   echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=produk'; </script>";
  // }else{
  //   echo "<script> alert ('Data Gagal Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
  // }

  if(move_uploaded_file($lokasifile, $uploadfile)&& move_uploaded_file($lokasifile1, $uploadfile1)&& move_uploaded_file($lokasifile2, $uploadfile2)&& move_uploaded_file($lokasifile3, $uploadfile3)){
    $querySimpan = mysqli_query($konek, "INSERT INTO tbl_produk (produk_nama, produk_harga, produk_cerita, produk_deskripsi, produk_link, produk_sampul, produk_foto1, produk_foto2, produk_foto3) VALUES ('$nama', '$harga', '$cerita', '$deskripsi', '$link', '$namafile', '$namafile1', '$namafile2', '$namafile3')");
        if($querySimpan){
          echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=produk'; </script>";     
        }
        else{
          echo "<script> alert ('Data Gagal Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
        }
    }else{
      $querySimpan = mysqli_query($konek, "INSERT INTO tbl_produk (artikel_judul, artikel_tgl, artikel_penulis, artikel_isi) VALUES ('$nama', '$harga', '$cerita', '$deskripsi', '$link')");
      echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=produk'; </script>";
    }

}
?>