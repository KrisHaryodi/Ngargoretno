<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Member Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>


<section class="content-header">
	<h1>
		Tambah Paket Wisata
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Tambah Paket Wisata</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/paketwisata/aksi_simpan.php" enctype="multipart/form-data">
					<div class="box-body">
						
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Nama Paket Wisata</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Paket Wisata">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Harga Paket Wisata</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Paket Wisata">
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
								<input type="file" id="foto" name="foto"><br>
						</div>
                        <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Paket Wisata</label>
                        </div><div>
						
              <textarea class="textarea" placeholder="Deskripsi Paket Wisata"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="deskripsi">
              </textarea>
                            
                        </div>
						
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Simpan</button>
					</div>
				</form>
			</div>
		
	</div>
</section>