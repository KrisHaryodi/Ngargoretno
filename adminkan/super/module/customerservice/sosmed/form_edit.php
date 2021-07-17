<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Format Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>

<?php 

include "lib/config.php";
include "lib/koneksi.php";
 
$id_sosmed=$_GET['id_sosmed'];
$queryEdit=mysqli_query($konek, "SELECT * FROM tbl_sosmed WHERE id_sosmed=".$id_sosmed);

$hasilQuery=mysqli_fetch_array($queryEdit);
$id_sosmed=$hasilQuery['id_sosmed'];
$twitter=$hasilQuery['sosmed_twitter'];
$facebook=$hasilQuery['sosmed_facebook'];
$youtube=$hasilQuery['sosmed_youtube'];
$instagram=$hasilQuery['sosmed_instagram'];
?>

<section class="content-header">
	<h1>
		Edit Sosial Media
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Edit Sosial Media</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/customerservice/sosmed/aksi_edit.php">
					<input type="hidden" class="form-control" id="id_sosmed" name="id_sosmed" value="<?php echo $id_sosmed; ?>">
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter" value="<?php echo $twitter; ?>">
							</div>
						</div>
					</div>
                    <div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook" value="<?php echo $facebook; ?>">
							</div>
						</div>
					</div>
                    <div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Youtube</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube" value="<?php echo $youtube; ?>">
							</div>
						</div>
					</div>
                    <div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Instagram</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram" value="<?php echo $instagram; ?>">
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