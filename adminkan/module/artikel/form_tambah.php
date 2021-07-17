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
		Tambah Artikel
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Tambah Artikel</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../adminkan/module/artikel/aksi_simpan.php" enctype="multipart/form-data">
					<div class="box-body">
						
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Judul Artikel</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Artikel</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="tgl" name="tgl">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Penulis Artikel</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis Artikel">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
								<input type="file" id="foto" name="foto"><br>
						</div>
                        <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Isi Artikel</label>
                        </div><div>
						
              <textarea class="textarea" placeholder="Isi Artikel"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="isi">
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