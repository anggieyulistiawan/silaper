<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIMRS - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/rsicon.png" rel="icon">
  <link href="assets2/img/rsicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets2/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="login">SIMRS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Laporkan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login">Kerusakan Barang IT</a></li>
              <li><a href="login">Instalasi Barang IT</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Panduan Perbaikan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url('welcome/p_bergaris') ?>">Panduan Printer Bergaris</a></li>
              <li><a href="<?php echo base_url('welcome/p_macet') ?>">Panduan Printer Macet</a></li>
              <li><a href="<?php echo base_url('welcome/p_jaringan') ?>">Panduan Jaringan Internet PC</a></li>
              <li><a href="<?php echo base_url('welcome/p_simrs') ?>">Panduan SIMRS Tidak Bisa Terbuka</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="login">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">
    <video autoplay muted loop id="bg-video">
      <source src="<?= base_url('assets2/gym-video.mp4') ?>" width="100%">
      </source>
    </video>
    </div>
  </section>

  <!-- <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>RSD IDAMAN </h1>
          <h1>KOTA BANJARBARU</h1>
          <h2>SISTEM INFORMATION</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="login" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=IfMdjJendLI" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets2/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section> -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets2/img/clients/clienti-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets2/img/clients/clienti-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets2/img/clients/clienti-3.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <h1 style="color:#228B22 ;">RSD Idaman Kota Banjarbaru</h1>
        </div>

        <div class="row content">
          <div class="text-center">
            <h3 style="color:#FF0000 ;">VISI</h3>
            <p>
              "BANJARBARU MAJU, AGAMIS, DAN SEJAHTERA"
            </p>

            <h3 style="color:#FF0000 ;">MISI</h3>
            <p>
              "MENINGKATKAN KUALITAS KEHIDUPAN MASYARAKAT YANG SEJAHTERA DAN BERAKHLAK MULIA"
            </p>

            <h3 style="color:#FF0000 ;">MOTTO</h3>
            <p>
              "KESEHATAN DAN KESELAMATAN ANDA PRIORITAS KAMI"
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>IT INFORMATION</strong></h3>
              <p>
                Kepala Instalasi SIMRS ( <strong>Muhammad Fariz Adani S.Kom</strong> ) dan
                Kepala Seksi Rekam Medik ( <strong>Indah Trisnaniyanti, SKM., MPH</strong> )
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Apa itu IT ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      IT singkatan dari <strong>Information Technology</strong> mengandung pengertian suatu teknik untuk mengumpulkan, menyiapkan, menyimpan, memproses, mengumumkan, menganalisis dan menyebarkan informasi.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Tim Hardware <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Gangguan terkait <strong>Printer, Jaringan Internet, Telepon</strong> Hubungi <strong>Tim Hardware</strong>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Tim Software <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Gangguan terkait <strong>Data SIMRS, Database, Sensus</strong> hubungi <strong>Tim Software</strong>
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets2/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Trikora No.115, Guntungmanggis, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70721</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>rsd.idamanbanjarbaru@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0511-6749696</p>
              </div>

            </div>

          </div>

          <!-- Google Maps -->
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15930.163242676965!2d114.8008816!3d-3.4611347!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11d744f8e4c50ab3!2sRSD%20Idaman%20Banjarbaru!5e0!3m2!1sen!2sid!4v1669175261452!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets2/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url() ?>assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets2/js/main.js"></script>

</body>

</html>