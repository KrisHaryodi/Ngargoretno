<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Admin Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>


<?php 
include "lib/config.php";
include "lib/koneksi.php";
 
$id_produk = $_GET['id_produk'];
$queryEdit = mysqli_query($konek, "SELECT * FROM tbl_produk WHERE id_produk=".$id_produk);
$hasilQuery = mysqli_fetch_array($queryEdit);

$nama = $hasilQuery['produk_nama'];
$harga = $hasilQuery['produk_harga'];
$cerita = $hasilQuery['produk_cerita'];
$deskripsi = $hasilQuery['produk_deskripsi'];
$komposisi = $hasilQuery['komposisi'];
$khasiat = $hasilQuery['khasiat'];
$link = $hasilQuery['produk_link'];
$sampul = $hasilQuery['produk_sampul'];
$foto1 = $hasilQuery['produk_foto1'];
$foto2 = $hasilQuery['produk_foto2'];
$foto3 = $hasilQuery['produk_foto3'];
?>

<section class="content-header">
	<h1>
		Edit Produk
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Edit Produk</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/produk/aksi_edit.php" enctype="multipart/form-data">
					<input type="hidden" class="form-control" id="id_produk" name="id_produk" value="<?php echo $id_produk; ?>">
					<div class="box-body">
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Nama Produk</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" value="<?php echo $nama; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Harga Produk</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="<?php echo $harga; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Cerita Produk</label>
							<div class="col-sm-10">
                                <textarea class="textarea" placeholder="Cerita tentang Produk" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="cerita"><?php echo $cerita; ?>
                        	</textarea>
							</div>
						</div>
                        <div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Deskripsi Produk</label>
							<div class="col-sm-10">
                                <textarea class="textarea" placeholder="Deskripsi tentang Produk" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="deskripsi"><?php echo $deskripsi; ?>
                        	</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Komposisi Produk</label>
							<div class="col-sm-10">
                                <textarea class="textarea" placeholder="Komposisi Produk" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="komposisi"><?php echo $komposisi; ?>
                        	</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Khasiat Produk</label>
							<div class="col-sm-10">
                                <textarea class="textarea" placeholder="Khasiat Produk" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="khasiat"><?php echo $khasiat; ?>
                        	</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Link Produk</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="link" name="link" placeholder="Link Produk" value="<?php echo $link; ?>">
							</div>
						</div>
						<div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Sampul</label>
                            <img src="../img/<?php echo $sampul; ?>" height="100" width="150">
								<input type="file" id="sampul" name="sampul"><br>
						</div>
                        <div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Produk 1</label>
                            <img src="../img/<?php echo $foto1; ?>" height="100" width="150">
								<input type="file" id="foto1" name="foto1"><br>
						</div>
                        <div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Produk 2</label>
                            <img src="../img/<?php echo $foto2; ?>" height="100" width="150">
								<input type="file" id="foto2" name="foto2"><br>
						</div>
                        <div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Produk 3</label>
                            <img src="../img/<?php echo $foto3; ?>" height="100" width="150">
								<input type="file" id="foto3" name="foto3"><br>
						</div>
                    	</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>