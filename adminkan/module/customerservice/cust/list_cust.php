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
		List Customer Service
		
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fa fa-dashboard"></i> Home
			</a>
		</li>
		<li class="active">List Customer Service</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<a href="adminweb.php?module=tambah_cust" class="btn btn-success">
						<i class='fa fa-plus'> Tambah Customer Service</i>
					</a>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody>
								<tr>
									<th style="width: 50px">ID</th>
									<th>Telepon</th>
	                                <th>Email</th>
                                    <th>Alamat</th>
									<th style="width: 110px">Aksi</th>
								</tr>
										<?php
										include "lib/config.php";
										include "lib/koneksi.php";
										$kueriFormat = mysqli_query($konek, "SELECT * FROM tbl_contact");

										$n = 1;
										while ($form=mysqli_fetch_array($kueriFormat)) {
										?>
								<tr>
									<td><?= $n ?></td>
									<td><?php echo $form['contact_hp'];?></td>
                                    <td><?php echo $form['contact_email'];?></td>
                                    <td><?php echo $form['contact_alamat'];?></td>
									<td>
										<div class="btn-group">
											<a href="<?php echo $admin_url;?>adminweb.php?module=edit_cust&id_contact=<?php echo $form['id_contact'];?>">
												<button class='btn btn-warning'>
													<i class='fa fa-pencil'></i>
												</button>
											</a>
											<a href="<?php echo $admin_url;?>module/customerservice/cust/aksi_hapus.php?id_contact=<?php echo $form['id_contact'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
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