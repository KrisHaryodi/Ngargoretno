
 <?php 
session_start();

if(empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<script> alert('Akses ditolak, Anda harus login'); window.location = '../../index.php';</script>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";
  error_reporting(0);
  
  //ambil data gambar
 
    
  //selain gambar
  $id_produk = $_POST['id_produk'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
  $cerita = $_POST['cerita'];
  $deskripsi = $_POST['deskripsi'];
	$link = $_POST['link'];
  

  //set folder penyimpanan gambar
    
  $jumlah = count($_FILES['gambar']['name']);
		if ($jumlah > 0) {
			$gambar = array();
			for ($i=0; $i < $jumlah; $i++) { 
				$file_name = $_FILES['gambar']['name'][$i];
				$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
				move_uploaded_file($tmp_name, "../../../img/".$file_name);
				$gambar[$i] = $file_name; 								
			}
    
    mysqli_query($konek, "INSERT INTO tbl_produk (produk_nama, produk_harga, produk_cerita, produk_deskripsi, produk_link, produk_sampul, produk_foto1, produk_foto2, produk_foto3) VALUES ('$nama', '$harga', '$cerita', '$deskripsi', '$link', '$gambar[0]', '$gambar[1]', '$gambar[2]', '$gambar[3]')");
     
	
    echo "<script> alert ('Data Berhasil Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=produk'; </script>";
  }else{
    echo "<script> alert ('Data Gagal Ditambahkan'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
  }
}
?>