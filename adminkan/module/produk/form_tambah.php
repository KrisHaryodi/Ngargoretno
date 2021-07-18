<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Produk Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>


<section class="content-header">
	<h1>
		Tambah Produk
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Tambah Produk</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/produk/aksi_simpan.php" enctype="multipart/form-data">
                    <?php 
include "lib/config.php";
include "lib/koneksi.php";
 

$queryEdit = mysqli_query($konek, "SELECT id_produk FROM tbl_produk ORDER BY id_produk DESC");
$hasilQuery = mysqli_fetch_array($queryEdit);

$id_produk = $hasilQuery['id_produk'];
$produk = $id_produk + 1;
    

?>
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
                            <input type="hidden" class="form-control" id="id_produk" name="id_produk" value="<?php echo $produk; ?>">
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Harga Produk</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Cerita</label>
							<div class="col-sm-10">
								<textarea class="textarea" placeholder="Cerita tentang Produk"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="cerita">
              </textarea>
							</div>
						</div>
                        <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea class="textarea" placeholder="Deskripsi tentang Produk"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="deskripsi">
              </textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Link</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="link" name="link" placeholder="Link Produk">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Sampul</label>
								<input type="file" id="sampul" name="sampul" multiple><br>
						</div>
                        <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Produk 1</label>
								<input type="file" id="foto1" name="foto1" multiple><br>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Produk 2</label>
								<input type="file" id="foto2" name="foto2" multiple><br>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto Produk 3</label>
								<input type="file" id="foto3" name="foto3" multiple><br>
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