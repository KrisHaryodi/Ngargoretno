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
		Form Tambah Profile Desa Ngargoretno
		<small></small>
	</h1>
	<ol class="breadcrumb">
		<li>
      <a href="#">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
		<li class="active">Tambah Profile Desa Ngargoretno</li>
	</ol>
</section>
<br>
    <div class="box box-info">
        <div class="box-header"><br>
          <i class="fa fa-thumbs-o-up"></i>
          <h3 class="box-title">Profile Desa Ngargoretno</h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                    title="Remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <div class="box-body">
          <form action="../../adminkan/super/module/home/aksi_simpan.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" name="judul" placeholder="Judul Profile Desa Ngargoretno">
            </div>
            <div>
              <textarea class="textarea" placeholder="Isi Profile Desa Ngargoretno"
                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="isi">
              </textarea>
            </div>
            <div class="form-group">
				<label for="inputEmail3" class="col-sm-1 control-label">Foto</label>
				    <input type="file" id="gambar" name="gambar">
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>