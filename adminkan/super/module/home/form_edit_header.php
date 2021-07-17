<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Home Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>

<?php 
include "lib/config.php";
include "lib/koneksi.php";
 
$id_header=$_GET['id_header'];
$queryEdit=mysqli_query($konek, "SELECT * FROM tbl_header WHERE id_header=".$id_header);
$hasilQuery=mysqli_fetch_array($queryEdit);

$id_header=$hasilQuery['id_header'];
$foto=$hasilQuery['gambar_header'];

?>
<section class="content-header">
	<h1>
		Edit Header Desa Ngargoretno
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Edit Header Desa Ngargoretno</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/home/aksi_edit_header.php"
					enctype="multipart/form-data">
					<input type="hidden" class="form-control" id="id_header" name="id_header" value="<?php echo $id_header; ?>">
					<div class="control-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
						<img src="img/<?php echo $foto; ?>" height="100" width="150">
						<input type="file" id="gambar" name="gambar"><br>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>