<?php
// Create database connection using config file
include_once("../config.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = $mysqli->query("SELECT * FROM t_artikel where id_artikel = $id limit 1");
  // query desc profile
  $row = $result->num_rows;
  if (!$row >= 1){
    header("location: /"); 
  }
} else {
  header("location: /");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Artikel detail</title>
  <meta content="Masjid Fatimatuzzahra didirikan 2 Desember 1994, dihitung dari dilaksanakannya shalat jum'at pertama yang dilaksanakan di Masjid Fatimatuzzahra." name="description">
  <meta content="Masjid Fatimatuzzahra" name="keywords">

  <!-- Favicons -->
  <link href="image/favicon.ico" rel="icon">
  <link href="image/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">Mafaza</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#profile">Profile</a></li>
          <li><a class="nav-link scrollto" href="/#kegiatan">Kegiatan</a></li>
          <li><a class="nav-link scrollto " href="/#galeri">Galeri</a></li>
          <li><a class="nav-link scrollto active" href="/#artikel">Artikel</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="/#donasi">Donasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel Detail</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Artikel Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Artikel Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          <?php
          while ($d = mysqli_fetch_array($result)) {
          ?>

            <div class="col-lg-5">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                  <div class="swiper-slide">
                    <img src="image/<?php echo $d['image']; ?>" alt="">
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-7">

              <div class="portfolio-description">
                <h2><?php echo $d['title']; ?></h2>
                <?php echo $d['description']; ?>
              </div>
            </div>

          <?php
          }
          ?>

        </div>

      </div>
    </section><!-- End Artikel Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-light text-center text-lg-start bg-dark text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">


        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 ">
          <h5 class="text-uppercase"><strong>Alamat</strong></h5>

          <p style="font-size: 1.1em;">
            Jl. H. Madrani No.1, Brubahan, Grendeng, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53122
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase"><strong>Halaman</strong></h5>
          <ul><strong>
              <li style="font-size: 1.1em; list-style-type:none;"><a href="/#hero">Home</a> </li>
              <li style="font-size: 1.1em; list-style-type:none;"><a href="/#profile">Profile</a> </li>
              <li style="font-size: 1.1em; list-style-type:none;"><a href="/#kegiatan">Kegiatan</a> </li>
              <li style="font-size: 1.1em; list-style-type:none;"><a href="/#galeri">Galeri</a> </li>
              <li style="font-size: 1.1em; list-style-type:none;"><a href="/#artikel">Artikel</a> </li>
              <li style="font-size: 1.1em; list-style-type:none;"><a href="/#contact">Contact</a> </li>
            </strong></ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.1337580568752!2d109.24981936651538!3d-7.40587801352809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655eeffc9048e3%3A0x2da558d27eaceb91!2sMasjid%20Fatimatuzzahra!5e0!3m2!1sid!2sid!4v1651597824836!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 200px;" allowfullscreen></iframe>
        </div>
        <!--Grid column-->
      </div>

    </div>
    <div class="bg-black d-flex justify-content-center p-3">
      <div class="copyright" style="font-size: 1.2em;">
        &copy; Copyright <strong><span>2022</span></strong>.
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>