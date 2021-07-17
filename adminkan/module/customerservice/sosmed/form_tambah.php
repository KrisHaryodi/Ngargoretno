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

?>

<section class="content-header">
	<h1>
		Tambah Sosial Media
		
	</h1>
	<ol class="breadcrumb">
		<li>
      <a href="#">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
		<li class="active">Tambah Sosial Media</li>
	</ol>
</section>
<br>
    <div class="box box-info">
        <div class="box-header"><br>
          <i class="fa fa-thumbs-o-up"></i>
          <h3 class="box-title">Sosial Media</h3>
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
          <form action="../adminkan/module/customerservice/sosmed/aksi_simpan.php" method="post">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="twitter" placeholder="Twitter">
                </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Youtube</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="youtube" placeholder="Youtube">
                </div>
            </div>
              <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Instagram</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                </div>
              </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>