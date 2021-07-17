<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Member Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>


<?php 
include "lib/config.php";
include "lib/koneksi.php";
 
$id_wisata = $_GET['id_wisata'];
$queryEdit = mysqli_query($konek, "SELECT * FROM tbl_wisata WHERE id_wisata=".$id_wisata);
$hasilQuery = mysqli_fetch_array($queryEdit);

$nama = $hasilQuery['wisata_nama'];
$harga = $hasilQuery['wisata_harga'];
$deskripsi = $hasilQuery['wisata_deskripsi'];
$foto = $hasilQuery['wisata_foto'];
?>

<section class="content-header">
	<h1>
		Edit Paket Wisata
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Edit Paket Wisata</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/paketwisata/aksi_edit.php"
					enctype="multipart/form-data">
					<input type="hidden" class="form-control" id="id_wisata" name="id_wisata" value="<?php echo $id_wisata; ?>">
					<div class="box-body">
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Nama Paket Wisata</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder=""
									value="<?php echo $nama; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Harga Paket Wisata</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="harga" name="harga" placeholder=""
									value="<?php echo $harga; ?>">
							</div>
						</div>

						<div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
							<img src="../img/<?php echo $foto; ?>" height="100" width="150">
							<input type="file" id="foto" name="foto" value="<?php echo $foto; ?>"><br>
						</div>

						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Paket Wisata</label>
								<div></div>
								<textarea 
									class="textarea"
									placeholder="Deskripsi Paket Wisata"
									style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
									name="deskripsi">
									<?php echo $deskripsi; ?>
								</textarea>
							</div>
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