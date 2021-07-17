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
 
$id_artikel = $_GET['id_artikel'];
$queryEdit = mysqli_query($konek, "SELECT * FROM tbl_artikel WHERE id_artikel=".$id_artikel);
$hasilQuery = mysqli_fetch_array($queryEdit);

$judul = $hasilQuery['artikel_judul'];
$tgl = $hasilQuery['artikel_tgl'];
$penulis = $hasilQuery['artikel_penulis'];
$isi = $hasilQuery['artikel_isi'];
$foto = $hasilQuery['artikel_foto'];
?>

<section class="content-header">
	<h1>
		Edit Artikel
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Edit Artikel</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/artikel/aksi_edit.php" enctype="multipart/form-data">
					<input type="hidden" class="form-control" id="id_artikel" name="id_artikel" value="<?php echo $id_artikel; ?>">
					<div class="box-body">
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="judul" name="judul" placeholder="" value="<?php echo $judul; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Tanggal</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="tgl" name="tgl" placeholder="" value="<?php echo $tgl; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Penulis</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="penulis" name="penulis" placeholder="" value="<?php echo $penulis; ?>">
							</div>
						</div>
						
						<div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
                            <img src="../img/<?php echo $foto; ?>" height="100" width="150">
								<input type="file" id="foto" name="foto"><br>
						</div>
                        
                        <div class="box-body">
                        <div class="form-group">
                        	<label for="inputEmail3" class="col-sm-2 control-label">Isi Artikel</label>
                        <div>
                        </div>
                            <textarea class="textarea" placeholder="Isi Artikel" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="isi"><?php echo $isi; ?>
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