<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Admin Super Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>

<section class="content-header">
	<h1>
		Tambah Admin
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Tambah Admin</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/admin/admsuper/aksi_simpan.php" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Member">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
                        <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Level User</label>
							<div class="col-sm-10">
                                <select class="form-control" name="level" id="level">
                                    <option value="Admin Biasa">Admin Biasa</option>
                                    <option value="Admin Super">Admin Super</option>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
								<input type="file" id="foto" name="foto"><br>
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