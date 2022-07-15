<?php
// Create database connection using config file
include_once("config.php");

// query desc profile
if (!$result_desc_profile = $mysqli->query("SELECT * FROM t_desc_profile ORDER BY id_desc_profile DESC LIMIT 1")) {
}

// query desc profile
if (!$result_kegiatan = $mysqli->query("SELECT * FROM t_kegiatan ORDER BY id_kegiatan ASC")) {
}

// query desc donasi
if (!$result_desc_donasi = $mysqli->query("SELECT * FROM t_desc_donasi ORDER BY id_desc_donasi DESC LIMIT 1")) {
}

// query artikel
if (!$result_artikel = $mysqli->query("SELECT * FROM t_artikel ORDER BY id_artikel DESC limit 6")) {
}

// query t_gallery
if (!$result_gallery = $mysqli->query("SELECT * FROM t_gallery ORDER BY id_gallery DESC limit 10")) {
}
// query t_alamat
if ($result_alamat = $mysqli->query("SELECT * FROM t_alamat ORDER BY id_alamat DESC limit 1")) {
  while ($alamat_data = mysqli_fetch_array($result_alamat)) {
    $link_maps = $alamat_data['link_maps'];
    $alamat = $alamat_data['alamat'];
  }
} else {
  $link_maps = "";
  $alamat = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Masjid Fatimatuzzahra</title>
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
  <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Mafaza</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#profile">Profile</a></li>
          <li><a class="nav-link scrollto" href="#kegiatan">Kegiatan</a></li>
          <li><a class="nav-link scrollto " href="#galeri">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#artikel">Artikel</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#donasi">Donasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center mb-5">
          <h1>Masjid Fatimatuzzahra</h1>
          <h2>Ahlan wa Sahlan</h2>
          <div class="d-flex">
            <a href="#profile" class="btn-get-started scrollto">Profile Masjid</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="image/OS5H440.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="profile" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="image/indonesian-traditional-muslim-illustration_579677-559-removebg-preview.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <?php
            // fetch data
            while ($user_data = mysqli_fetch_array($result_desc_profile)) {
              echo "<h3>" . $user_data['title'] . "</h3>";
              echo $user_data['description'];
            }
            ?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Kegiatan Section ======= -->
    <section id="kegiatan" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kegiatan dan Layanan</h2>
          <center>
            <hr style="border: 3px solid #16df7e; width: 50px;" />
          </center>
        </div>

        <div class="row">

          <?php
          // fetch data
          while ($kegiatan_data = mysqli_fetch_array($result_kegiatan)) {

            echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">';
            echo '<div class="icon-box">';
            echo '  <div class="icon">' . $kegiatan_data['badge'] . '</div>';
            echo '   <h4>' . $kegiatan_data['title'] . '</h4>';
            echo '    <p>' . $kegiatan_data['description'] . '</p>';
            echo '  </div>';
            echo '</div>';
          }
          ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= galeri Section ======= -->
    <section id="galeri">
      <div class="container">

        <div class="section-title">
          <h2>Galeri</h2>
          <center>
            <hr style="border: 3px solid #16df7e; width: 50px;" />
          </center>
        </div>

        <div class="row d-flex justify-content-center">
          <?php
          // fetch data
          while ($gallery_data = mysqli_fetch_array($result_gallery)) {
            echo '<div class="card  mt-2 ml-2 mb-2  col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12" style="border-style: none;">';
            echo '  <a href="image/galeri/' . $gallery_data['image_path'] . '"><img class="card-img-top" src="image/galeri/' . $gallery_data['image_path'] . '"';
            echo '      alt="' . $gallery_data['description'] . '"></a>';
            echo '</div>';
          }
          ?>
        </div>

      </div>
    </section><!-- End galeri Section -->



    <!-- ======= Donasi Section ======= -->
    <section id="donasi" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Donasi</h3>
          <?php
          // fetch data
          while ($profile_data = mysqli_fetch_array($result_desc_donasi)) {
            echo $profile_data['description'];
          }
          ?>
        </div>

      </div>
    </section><!-- End Donasi Section -->

    <!-- ======= Artikel Section ======= -->
    <section id="artikel" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Artikel</h2>
          <center>
            <hr style="border: 3px solid #16df7e; width: 50px;" />
          </center>
        </div>

        <div class="row">
          <?php
          // fetch data
          while ($artikel_data = mysqli_fetch_array($result_artikel)) {
            echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">';
            echo '<img src="image/' . $artikel_data['image'] . '" alt="">';
            echo '<h4>' . $artikel_data['title'] . '</h4>';
            echo substr($artikel_data['description'], 0,  200);
            echo '<div class="social">';
            echo '<a href="/post?id=' . $artikel_data['id_artikel'] . '" class="btn btn-success text-white">Selengkapnya</a>';
            echo '</div>
                </div>
              </div>';
          }
          ?>

          <!-- <div class="col-lg-12 d-flex justify-content-center">
            <a href="artikel-detail.html" class="btn btn-primary justify-content-center">Lihat Selengkapnya</a>
          </div> coming soon, nanti akan dibuka kembali kalau ada backend -->
        </div>

      </div>
    </section><!-- End Artikel Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <center>
            <hr style="border: 3px solid #16df7e; width: 50px;" />
          </center>
          <p>Saran dan kritik untuk kemajuan masjid kami tercinta akan kami dengarkan selalu.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="core/contact_us_act.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="text-center"><input type="submit" class="btn btn-success " name="submit" id="subject" value="Kirim" required></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
            <?php
            echo $alamat;
            ?>
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase"><strong>Halaman</strong></h5>
          <ul>
            <li style="font-size: 1.1em; list-style-type:none;"><a href="#hero">Home</a> </li>
            <li style="font-size: 1.1em; list-style-type:none;"><a href="#profile">Profile</a> </li>
            <li style="font-size: 1.1em; list-style-type:none;"><a href="#kegiatan">Kegiatan</a> </li>
            <li style="font-size: 1.1em; list-style-type:none;"><a href="#galeri">Galeri</a> </li>
            <li style="font-size: 1.1em; list-style-type:none;"><a href="#artikel">Artikel</a> </li>
            <li style="font-size: 1.1em; list-style-type:none;"><a href="#contact">Contact</a> </li>
          </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <iframe src="<?php
                        echo $link_maps;
                        ?>" frameborder="0" style="border:0; width: 100%; height: 200px;" allowfullscreen></iframe>
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

  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>