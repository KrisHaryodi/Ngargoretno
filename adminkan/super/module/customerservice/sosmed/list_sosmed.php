<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Format Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>

<section class="content-header">
	<h1>
		List Sosial Media
		
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">List Sosial Media</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<a href="adminweb.php?module=tambah_sosmed" class="btn btn-success">
						<i class='fa fa-plus'> Tambah Sosial Media</i>
					</a>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody>
								<tr>
									<th style="width: 50px">ID</th>
									<th>Twitter</th>
	                                <th>Facebook</th>
                                    <th>Youtube</th>
                                    <th>Instagram</th>
									<th style="width: 110px">Aksi</th>
								</tr>
										<?php
										include "lib/config.php";
										include "lib/koneksi.php";
										$kueriFormat = mysqli_query($konek, "SELECT * FROM tbl_sosmed");

										$n = 1;
										while ($form=mysqli_fetch_array($kueriFormat)) {
										?>
								<tr>
									<td><?= $n ?></td>
									<td><?php echo $form['sosmed_twitter'];?></td>
                                    <td><?php echo $form['sosmed_facebook'];?></td>
                                    <td><?php echo $form['sosmed_youtube'];?></td>
                                    <td><?php echo $form['sosmed_instagram'];?></td>
									<td>
										<div class="btn-group">
											<a href="<?php echo $super_url;?>adminweb.php?module=edit_sosmed&id_sosmed=<?php echo $form['id_sosmed'];?>">
												<button class='btn btn-warning'>
													<i class='fa fa-pencil'></i>
												</button>
											</a>
											<a href="<?php echo $super_url;?>module/customerservice/sosmed/aksi_hapus.php?id_sosmed=<?php echo $form['id_sosmed'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
												<button class="btn btn-danger">
													<i class='fa fa-power-off'></i>
												</button>
											</a>
										</div>
									</td>
								</tr>
							<?php $n++; } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>