<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Admin Super Anda Harus Login'); window.location = '../../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>


<section class="content-header">
      <h1>List Admin
        <small>Control Panel</small>
      </h1>
  <ol class="breadcrumb">      
    <li>
      <a href="#">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
    <li class="active">List Admin</li>
  </ol>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="adminweb.php?module=tambah_admsuper" class="btn btn-success"><i class='fa fa-plus'> Tambah Admin</i></a>
            </div>  
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level Admin</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th style="width: 110px">Aksi</th>
                </tr>
                        <?php
                        include "lib/config.php";
                        include "lib/koneksi.php";
                        $kueriAdmin = mysqli_query($konek,"select * from tbl_admin");
                        $n = 1;
                        while ($adm = mysqli_fetch_array($kueriAdmin)) {
                        ?>
                    <tr>
                        <td><?= $n ?></td>
                        <td><?php echo $adm['username'];?></td>
                        <td><?php echo $adm['nama'];?></td>
                        <td><?php echo $adm['level_user'];?></td>
                        <td><?php echo $adm['email'];?></td>
                        <td><img src="img/<?php echo $adm['foto'];?>" height="100" width="150"></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo $super_url; ?>adminweb.php?module=edit_admsuper&id_admin=<?php echo $adm['id_admin'];?>" class="btn btn-warning"><i class='fa fa-pencil'></i></a>
                                <a href="<?php echo $super_url; ?>module/admin/admsuper/aksi_hapus.php?id_admin=<?php echo $adm['id_admin'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class='fa fa-power-off'></i></a>
                            </div>
                        </td>
                    </tr>             
                <?php $n++; 
                }   
                ?>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
