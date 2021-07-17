<?php 
session_start();?>

<?php
include "../lib/koneksi.php";
include "../lib/config.php";
$queryLihat = mysqli_query($konek, "SELECT * FROM tbl_admin WHERE id_admin =$_SESSION[id_admin]");
while($tampilQuery = mysqli_fetch_array($queryLihat)){
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desa Ngargoretno</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="asset/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="asset/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="asset/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="asset/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Desa Ngargoretno</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>    
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/<?php echo $tampilQuery['foto'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><a href="#"><?php echo $tampilQuery['nama']; ?></a></p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="adminweb.php?module=home">
            <i class="fa fa-home"></i>
            <span>Profile</span>
          </a>
        </li>
          
          <li class="treeview">
          <a href="#">
            <i class="fa fa-phone"></i> 
            <span>Contact Person</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($_GET['module'] == 'cust'){ echo 'class="active"'; }else{ echo '';}?>>
              <a href="adminweb.php?module=cust">
                <i class="fa fa-circle-o"></i> Customer Service
              </a>
            </li>
            <li <?php if($_GET['module'] == 'sosmed'){ echo 'class="active"'; }else{ echo '';}?>>
              <a href="adminweb.php?module=sosmed">
                <i class="fa fa-circle-o"></i> Sosial Media
              </a>
            </li> 
          </ul>
        </li>
        <li>
          <a href="adminweb.php?module=produk">
            <i class="fa fa-shopping-cart"></i> 
            <span>Produk</span>
          </a>
        </li>
          <li>
          <a href="adminweb.php?module=paketwisata">
            <i class="fa fa-plane"></i> 
            <span>Paket Wisata</span>
          </a>
        </li>
          <li>
          <a href="adminweb.php?module=artikel">
            <i class="fa fa-pencil-square-o"></i> 
            <span>Artikel</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fa fa-power-off"></i>
            <span>Logout</span>
          </a>
        </li>
        <li>
          <a href="">
            
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- script php -->
  <!-- /.content-wrapper -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
    if ($_GET['module'] == 'home'){
      include "module/home/home.php";
    }elseif ($_GET['module'] == 'tambah_home'){
      include "module/home/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_home'){
      include "module/home/form_edit.php";
    } 

    elseif ($_GET['module'] == 'admsuper'){
      include "module/admin/admsuper/list_admin.php";
    }elseif ($_GET['module'] == 'tambah_admsuper'){
      include "module/admin/admsuper/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_admsuper'){
      include "module/admin/admsuper/form_edit.php";
    }

    elseif ($_GET['module'] == 'produk'){
      include "module/produk/list_produk.php";
    }elseif ($_GET['module'] == 'tambah_produk'){
      include "module/produk/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_produk'){
      include "module/produk/form_edit.php";
    }

    elseif ($_GET['module'] == 'paketwisata'){
      include "module/paketwisata/list_paketwisata.php";
    }elseif ($_GET['module'] == 'tambah_paketwisata'){
      include "module/paketwisata/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_paketwisata'){
      include "module/paketwisata/form_edit.php";
    }
                                                      
    elseif ($_GET['module'] == 'artikel'){
      include "module/artikel/list_artikel.php";
    }elseif ($_GET['module'] == 'tambah_artikel'){
      include "module/artikel/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_artikel'){
      include "module/artikel/form_edit.php";
    }                                                  
                                                      
    elseif ($_GET['module'] == 'admforum'){
      include "module/admin/admforum/list_adminforum.php";
    }elseif ($_GET['module'] == 'tambah_admforum'){
      include "module/admin/admforum/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_admforum'){
      include "module/admin/admforum/form_edit.php";
    } 

                                                 
    elseif ($_GET['module'] == 'cust'){
      include "module/customerservice/cust/list_cust.php";
    }elseif ($_GET['module'] == 'tambah_cust'){
      include "module/customerservice/cust/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_cust'){
      include "module/customerservice/cust/form_edit.php";
    }
                                                      
    elseif ($_GET['module'] == 'sosmed'){
      include "module/customerservice/sosmed/list_sosmed.php";
    }elseif ($_GET['module'] == 'tambah_sosmed'){
      include "module/customerservice/sosmed/form_tambah.php";
    }elseif ($_GET['module'] == 'edit_sosmed'){
      include "module/customerservice/sosmed/form_edit.php";
    } 

   
    ?>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b></b>
    </div>
    <strong>Copyright &copy; 2020.</strong> All rights
    reserved.
  </footer>
  <?php  
   }
  ?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="asset/bower_components/raphael/raphael.min.js"></script>
<script src="asset/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/bower_components/moment/min/moment.min.js"></script>
<script src="asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>

</body>
</html>

