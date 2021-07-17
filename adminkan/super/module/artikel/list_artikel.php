<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Artikel Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>


<section class="content-header">
    <h1>List Artikel</h1>
      <ol class="breadcrumb">
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> Home
          </a>
        </li>
        <li class="active">List Artikel</li>
      </ol>
</section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="adminweb.php?module=tambah_artikel" class="btn btn-success">
                <i class='fa fa-plus'> Tambah Artikel </i>
            </a>
            </div>  
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Judul Artikel</th>
                        <th>Tanggal Artikel</th>
                        <th>Penulis Artikel</th>
                        <th>Isi Artikel</th>
                        <th>Foto Artikel</th>
                        
                        
                        <th style="width: 110px">Aksi</th>
                    </tr>
                            <?php
                            include "lib/config.php";
                            include "lib/koneksi.php";
                            $kueriMember = mysqli_query($konek,"select * from tbl_artikel");
                            $n = 1;
                            while ($mbr = mysqli_fetch_array($kueriMember)) {
                            ?>
                    <tr>
                        <td><?= $n ?></td>
                        <td><?php echo $mbr['artikel_judul'];?></td>
                        <td><?php echo $mbr['artikel_tgl'];?></td>
                        <td><?php echo $mbr['artikel_penulis'];?></td>
                        <td><?php echo $mbr['artikel_isi'];?></td>
                        <td><img src="../img/<?php echo $mbr['artikel_foto'];?>" height="100" width="150"></td>
                        
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo $super_url; ?>adminweb.php?module=edit_artikel&id_artikel=<?php echo $mbr['id_artikel'];?>" class="btn btn-warning">
                                  <i class='fa fa-pencil'></i>
                                </a>
                                <a href="<?php echo $super_url; ?>module/artikel/aksi_hapus.php?id_artikel=<?php echo $mbr['id_artikel'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                  <i class='fa fa-power-off'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
              </tbody>
                  <?php $n++; } 
              echo "</table>";
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
