<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Home Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="#">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
      <section class="content">
        	<div class="row">
        		<div class="col-xs-12">
        			<div class="box">
        				<div class="box-header">
        					<a href="adminweb.php?module=tambah_home" class="btn btn-success">
                    <i class='fa fa-plus'> Tambah Profile Desa Ngargoretno </i>
                  </a>
                </div>
        				<div class="box-body table-responsive no-padding">
        					<table class="table table-hover">
        						<tbody>
        							<tr>
        								<th style="width: 50px">ID</th>
        								<th>Judul Profile Desa Ngargoretno</th>
                                        <th>Isi Profile Desa Ngargoretno</th>
                                        <th>Foto Profile Desa Ngargoretno</th>
								        <th style="width: 110px">Aksi</th>
							        </tr>
              							<?php
              							include "lib/config.php";
              							include "lib/koneksi.php";
              							$kueriAbout= mysqli_query($konek, "SELECT * FROM tbl_profile");
              							$n = 1;
              							while ($abot=mysqli_fetch_array($kueriAbout)) {
								            ?>
								      <tr>
      									<td><?= $n ?></td>
      									<td><?php echo $abot['profile_judul'];?></td>
                                        <td><?php echo $abot['profile_isi'];?></td>
                                        <td><img src="img/<?php echo $abot['profile_foto'];?>" height="100" width="150"></td>
									      <td>
    										<div class="btn-group">
    											<a href="<?php echo $admin_url;?>adminweb.php?module=edit_home&id_profile=<?php echo $abot['id_profile'];?>">
    												<button class='btn btn-warning'><i class='fa fa-pencil'></i></button>
    											</a>
    											<a href="<?php echo $admin_url;?>module/home/aksi_hapus.php?id_profile=<?php echo $abot['id_profile'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
    												<button class="btn btn-danger"><i class='fa fa-power-off'></i></button>
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
  </div>
</section>