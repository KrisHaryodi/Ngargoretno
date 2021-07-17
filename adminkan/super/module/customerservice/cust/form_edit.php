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
 
$id_contact=$_GET['id_contact'];
$queryEdit=mysqli_query($konek, "SELECT * FROM tbl_contact WHERE id_contact=".$id_contact);

$hasilQuery=mysqli_fetch_array($queryEdit);
$id_contact=$hasilQuery['id_contact'];
$hp=$hasilQuery['contact_hp'];
$email=$hasilQuery['contact_email'];
$alamat=$hasilQuery['contact_alamat'];
?>

<section class="content-header">
	<h1>
		Edit Customer Service
		
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Edit Customer Service</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/customerservice/cust/aksi_edit.php">
					<input type="hidden" class="form-control" id="id_contact" name="id_contact" value="<?php echo $id_contact; ?>">
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Nomor Telepon</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="hp" name="hp" placeholder="Nomor Telepon" value="<?php echo $hp; ?>">
							</div>
						</div>
					</div>
                    <div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Alamat Email</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email" value="<?php echo $email; ?>">
							</div>
						</div>
					</div>
                    <div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Alamat Desa</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Desa" value="<?php echo $alamat; ?>">
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