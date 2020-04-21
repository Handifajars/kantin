<!DOCTYPE html>
<html>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:41 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->session->userdata("nama"); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard//css/fontastic.css">
  <!-- Google fonts - Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
  <!-- DataTables CSS-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard//css/style.default.premium.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard//css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/img/favicon.ico">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <div class="page">
    <!-- Main Navbar-->
    <header class="header">
      <nav class="navbar">
        <!-- Search Box-->
        <div class="search-box">
          <button class="dismiss"><i class="icon-close"></i></button>
          <form id="searchForm" action="#" role="search">
            <input type="search" placeholder="What are you looking for..." class="form-control">
          </form>
        </div>
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <!-- Navbar Header-->
            <div class="navbar-header">
              <!-- Navbar Brand --><a href="admin" class="navbar-brand d-none d-sm-inline-block">
                <div class="brand-text d-none d-lg-inline-block"><span>Selamat Datang </span>&nbsp;<strong><?php echo $this->session->userdata("nama"); ?></strong></div>
                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
              </a>
              <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
            </div>
            <!-- Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <!-- Search-->
              <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
              <!-- Notifications-->
              <!-- Messages                        -->


              <!-- Logout    -->
              <li class="nav-item">&nbsp;<a href="<?php echo base_url('masuk/logout'); ?>">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
      <!-- Side Navbar -->
      <nav class="side-navbar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center"><a href="pages-profile.html">
          </a>
          <div class="title">
            <h1 class="h4">Daftar Menu</h1>
            <p>MHANS RESTO Team</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">MENU</span>
        <ul class="list-unstyled">
          <!-- <li class=""><a href=""> <i><img src="<?php echo base_url(); ?>dasboard/icon/accspv.png"></i>ACC Pengajuan </a></li> -->
          <li class=""><a href="<?php echo base_url();?>user/handi/17081010012"> <i><img src="<?php echo base_url(); ?>dasboard/icon/accspv.png"></i>Daftar menu </a></li>
          </li>
          <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="<?php echo base_url(); ?>dasboard/icon/dasboard.png"></i>Informasi</a>
            <ul id="pagesDropdown" class="collapse list-unstyled ">
              <li><a href="<?php echo base_url();?>pesanan/handi/17081010012">Keranjang</a></li>
              <li><a href="pages-invoice.html">Kontak kami</a></li>
            </ul>
          </li>
      </nav>
      </nav>
      <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
          <div class="container-fluid">
            <h2 class="no-margin-bottom">Data Menu</h2>
          </div>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="user">Beranda</a></li>
            <li class="breadcrumb-item active">Data Menu</li>
          </ul>
        </div>
        <section>
          <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h4>Daftar menu</h4>
              </div>
              <div class="card-body">
                <div class="row">

                </div>
                <div class="table-responsive">
                  <table border="1" style="width: 100%;" class="table">
                    <thead>
                      <tr class="head">
                        <th>No</th>
                        <th>Nama menu</th>
                        <th>harga</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($m_data as $p) {
                      echo form_open('pesanan/tambah');
                    ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $p['nama_menu']; ?></td>
                        <td><?php echo $p['harga']; ?></td>

                        <input type="hidden" name="nama" value="<?php echo $p['nama_menu']; ?>">
                        <input type="hidden" name="harga" value="<?php echo $p['harga']; ?>">
                        <input type="hidden" name="kode" value="">
                        <th><button type="submit"><img width="32px" src="<?php echo base_url(); ?>/dasboard/icon/centang.jpg"></button></th>
                      </tr>
                    <?php
                      echo form_close();
                      $no++;
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Footer-->
        <footer class="main-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <p>Your company &copy; 2017-2019</p>
              </div>
              <div class="col-sm-6 text-right">
                <p>Version 1.4.5</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="<?php echo base_url(); ?>dasboard/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>dasboard/vendor/popper.js/umd/popper.min.js"> </script>
  <script src="<?php echo base_url(); ?>dasboard/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>dasboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="<?php echo base_url(); ?>adasboard/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>dasboard/vendor/jquery-validation/jquery.validate.min.js"></script>
  <!-- Data Tables-->
  <script src="<?php echo base_url(); ?>dasboard/vendor/datatables.net/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>dasboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="<?php echo base_url(); ?>dasboard/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url(); ?>dasboard/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>dasboard/js/tables-datatable.js"></script>
  <!-- Main File-->
  <script src="<?php echo base_url(); ?>dasboard/js/front.js"></script>
</body>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:43 GMT -->

</html>