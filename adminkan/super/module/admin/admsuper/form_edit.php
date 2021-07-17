<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Admin Super Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>

<?php 

include "lib/config.php";
include "lib/koneksi.php";
 
$id_admin = $_GET['id_admin'];
$queryEdit = mysqli_query($konek, "SELECT * FROM tbl_admin WHERE id_admin=".$id_admin);
$hasilQuery = mysqli_fetch_array($queryEdit);

$username = $hasilQuery['username'];
$password = $hasilQuery['password'];
$nama = $hasilQuery['nama'];
$email = $hasilQuery['email'];
$foto = $hasilQuery['foto'];
$level = $hasilQuery['level_user'];
 ?>
<section class="content-header">
	<h1>
		Edit Admin
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Edit Admin</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/admin/admsuper/aksi_edit.php" enctype="multipart/form-data">
					<input type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?php echo $id_admin; ?>">
					<div class="box-body">
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="username" name="username" placeholder="" value="<?php echo $username; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password" name="password" placeholder="" value="<?php echo $password; ?>">
							</div>
						</div>
                        <div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Level Admin</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="level" name="level" placeholder="" value="<?php echo $level; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Nama Admin</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="" value="<?php echo $nama; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="basicinput" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo $email; ?>">
							</div>
						</div>
						<div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
							<div class="controls">
                                <img src="img/<?php echo $foto; ?>" height="100" width="150">
								<input type="file" id="foto" name="foto"><br>
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