<?php 
if(!isset($_SESSION)) { 
    session_start(); 
    echo "<script> alert('Untuk Mengakses Produk Anda Harus Login'); window.location = '../../index.php';</script>";
} else {
  include "../lib/config.php";
  include "../lib/koneksi.php";
}
?>


<section class="content-header">
  <h1>List Produk</h1>
  <ol class="breadcrumb">
    <li>
      <a href="#">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
    <li class="active">List Produk</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <a href="adminweb.php?module=tambah_produk" class="btn btn-success">
            <i class='fa fa-plus'> Tambah Produk </i>
          </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <tbody>
              <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Cerita Produk</th>
                <th>Deskripsi Produk</th>
                <th>Link Produk</th>
                <th>Foto Sampul</th>
                <th>Foto Produk 1</th>
                <th>Foto Produk 2</th>
                <th>Foto Produk 3</th>

                <th style="width: 110px">Aksi</th>
              </tr>
              <?php
                            include "lib/config.php";
                            include "lib/koneksi.php";
                    
                            $kueriMember = mysqli_query($konek,"select * from tbl_produk");
                            $n = 1;
                            while ($mbr = mysqli_fetch_array($kueriMember)) {
                            ?>
              <tr>
                <td><?= $n ?></td>

                <td><?php echo $mbr['produk_nama'];?></td>
                <td><?php echo $mbr['produk_harga'];?></td>
                <td>
                  <?php echo substr($mbr['produk_cerita'],0,200);?>...
                </td>
                <td>
                  <?php echo substr($mbr['produk_deskripsi'],0,200);?>...
                </td>
                <td><?php echo $mbr['produk_link'];?></td>
                <td><img src="img/<?php echo $mbr['produk_sampul'];?>" height="100" width="150"></td>
                <td><img src="img/<?php echo $mbr['produk_foto1'];?>" height="100" width="150"></td>
                <td><img src="img/<?php echo $mbr['produk_foto2'];?>" height="100" width="150"></td>
                <td><img src="img/<?php echo $mbr['produk_foto3'];?>" height="100" width="150"></td>

                <td>
                  <div class="btn-group">
                    <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_produk&id_produk=<?php echo $mbr['id_produk'];?>"
                      class="btn btn-warning">
                      <i class='fa fa-pencil'></i>
                    </a>
                    <a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=<?php echo $mbr['id_produk'];?>"
                      onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                      <i class='fa fa-power-off'></i>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
            <?php $n++; }
              
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