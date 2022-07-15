<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin - Masjid Fatimatuzzahra</title>

  <!-- Favicons -->
  <link href="image/favicon.ico" rel="icon">
  <link href="image/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/assets-stisla/css/style.css">
  <link rel="stylesheet" href="../assets/assets-stisla/css/components.css">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- plugin -->
  <script src="assets/vendor/ckeditor/ckeditor.js"></script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="../assets/assets-stisla/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">Mafaza</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php">MZ</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Admin Panel</li>
            <li class="nav-item dropdown <?php if (isset($_GET['page'])) {
                                            if ($_GET['page'] == "buat-artikel" || $_GET['page'] == "list-artikel" || $_GET['page'] == "update-artikel") {
                                              echo "active";
                                            }
                                          } ?>">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Artikel</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/admin?page=list-artikel">List Artikel</a></li>
                <li><a class="nav-link" href="/admin?page=buat-artikel">Buat Artikel Baru</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown <?php if (isset($_GET['page'])) {
                                            if ($_GET['page'] == "buat-kegiatan" || $_GET['page'] == "list-kegiatan" || $_GET['page'] == "update-kegiatan") {
                                              echo "active";
                                            }
                                          } ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Kegiatan & Layanan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/admin?page=list-kegiatan">List Kegiatan</a></li>
                <li><a class="nav-link" href="/admin?page=buat-kegiatan">Buat Kegiatan Baru</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown <?php if (isset($_GET['page'])) {
                                            if ($_GET['page'] == "buat-gallery" || $_GET['page'] == "list-gallery" || $_GET['page'] == "update-gallery") {
                                              echo "active";
                                            }
                                          } ?>">
              <a href="#" class="nav-link has-dropdown"><i class="bi bi-columns"></i><span>Gallery</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/admin?page=list-gallery">List Foto</a></li>
                <li><a class="nav-link" href="/admin?page=buat-gallery">Tambah Foto Baru</a></li>
              </ul>
            </li>
            <li class="<?php if (isset($_GET['page'])) {
                          if ($_GET['page'] == "profile") {
                            echo "active";
                          }
                        } ?>"><a class="nav-link " href="/admin?page=profile"><i class="bi bi-bank"></i> <span>Text Profile</span></a></li>
            <li class="<?php if (isset($_GET['page'])) {
                          if ($_GET['page'] == "donasi") {
                            echo "active";
                          }
                        } ?>"><a class="nav-link " href="/admin?page=donasi"><i class="bi bi-coin"></i> <span>Text Donasi</span></a></li>
            <li class="<?php if (isset($_GET['page'])) {
                          if ($_GET['page'] == "alamat") {
                            echo "active";
                          }
                        } ?>"><a class="nav-link " href="/admin?page=alamat"><i class="bi bi-pin-angle"></i> <span>Alamat</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Home
            </a>
          </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          // route
          switch ($page) {
              // module artikel
            case 'list-artikel':
              include('../core/list_artikel.php');
              break;
            case 'buat-artikel':
              include('../core/buat_artikel.php');
              break;
            case 'update-artikel':
              include('../core/update_artikel.php');
              break;
            case 'delete-artikel':
              include('../core/delete_artikel_act.php');
              break;

              // module kegiatan & layanan
            case 'list-kegiatan':
              include('../core/list_kegiatan.php');
              break;
            case 'buat-kegiatan':
              include('../core/buat_kegiatan.php');
              break;
            case 'update-kegiatan':
              include('../core/update_kegiatan.php');
              break;

              // module gallery
            case 'list-gallery':
              include('../core/list_gallery.php');
              break;
            case 'buat-gallery':
              include('../core/buat_gallery.php');
              break;
            case 'update-gallery':
              include('../core/update_gallery.php');
              break;

              // donasi
            case 'donasi':
              include('../core/donasi.php');
              break;
              // profile
            case 'profile':
              include('../core/profile.php');
              break;
              // alamat
            case 'alamat':
              include('../core/alamat.php');
              break;


            default:
              include('../core/404.php');
              break;
          }
        } else {
          include('../core/list_artikel.php');
        }
        ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Masjid Fatimatuzahra
        </div>
        <div class="footer-right">
          V 1.0.1
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/assets-stisla/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/assets-stisla/js/scripts.js"></script>
  <script src="../assets/assets-stisla/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/assets-stisla/js/page/index.js"></script>
  <script>
    CKEDITOR.replace('editor1');
  </script>
</body>

</html>