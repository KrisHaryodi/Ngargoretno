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
		Tambah Customer Service
		
	</h1>
	<ol class="breadcrumb">
		<li>
      <a href="#">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
		<li class="active">Tambah Customer Service</li>
	</ol>
</section>
<br>
    <div class="box box-info">
        <div class="box-header"><br>
          <i class="fa fa-thumbs-o-up"></i>
          <h3 class="box-title">Customer Service</h3>
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
          <form action="../../adminkan/super/module/customerservice/cust/aksi_simpan.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="hp" placeholder="Nomor Telepon">
            </div>
              <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Alamat Email">
            </div>
              <div class="form-group">
              <input type="text" class="form-control" name="alamat" placeholder="Alamat Desa">
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>