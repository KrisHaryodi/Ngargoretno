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
 
$id_profile=$_GET['id_profile'];
$queryEdit=mysqli_query($konek, "SELECT * FROM tbl_profile WHERE id_profile=".$id_profile);
$hasilQuery=mysqli_fetch_array($queryEdit);

$id_profile=$hasilQuery['id_profile'];
$judul=$hasilQuery['profile_judul'];
$isi=$hasilQuery['profile_isi'];
$foto=$hasilQuery['profile_foto'];

?>
<section class="content-header">
	<h1>
		Edit Profile Desa Ngargoretno
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">Edit Profile Desa Ngargoretno</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div>
				<form method="post" class="form-horizontal" action="../../adminkan/super/module/home/aksi_edit.php" enctype="multipart/form-data">
					<input type="hidden" class="form-control" id="id_profile" name="id_profile" value="<?php echo $id_profile; ?>">
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Judul Profile Desa Ngargoretno</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Profile Desa Ngargoretno" value="<?php echo $judul; ?>">
							</div>
						</div>
					</div>
                    <div class="box-body">
                        <div class="form-group">
                        	<label for="inputEmail3" class="col-sm-2 control-label">Isi Profile Desa Ngargoretno</label>
                        </div>
                        <div>
                            <textarea class="textarea" placeholder="Isi Profile Desa Ngargoretno" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="isi"><?php echo $isi; ?>
                        	</textarea>
                        </div>
					</div>
                    <div class="control-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
                            <img src="../img/<?php echo $foto; ?>" height="100" width="150">
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