<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Colegio Santa María</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-dorado.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
          <h1 class="text-light"><a href="index.php"><span> <small style="font-size:12px;"> colegio </small></span>Santa María</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="active " href="index.php">Home</a></li>
            <!-- <li><a href="about.php">Institucional</a></li> -->
            <li><a href="portfolio.php">Comunicados</a></li>
            <li><a href="about.php">Nuestra Historia</a></li>
            <!-- <li><a href="team.php">Team</a></li>
            <li><a href="blog.php">Blog</a></li> -->
            <li class="dropdown"><a href="#"><span>Institucional</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="ideario-prov.php">Ideario</a></li>
                <li class="dropdown"><a href="#"><span>Autoridades</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="team.php">Staff docente</a></li>
                    <!-- <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li> -->
                  </ul>
                </li>
                <!-- <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li> -->
              </ul>
            </li>
            <li><a href="contact.php">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Canales de comunicación</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contacto</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Dónde estamos</h3>
                  <p>Hipólito Yrigoyen 625, B1625 Belén de Escobar, Provincia de Buenos Aires</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-whatsapp"></i>
                  <h3>Escribinos por whatsapp</h3>
                  <!-- <p>+1 5589 55488 55<br>+1 6678 254445 41</p> -->
                  <p><a href="#">11 5469 2000</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Llamanos</h3>
                  <p>0348 442-0676</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="tu nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="tu email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Dejanos tu consulta" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.1836691960343!2d-58.79589108520459!3d-34.34580335140327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bb61b014440b81%3A0x48ca652c3d31621b!2sSANTA%20MARIA%20SCHOOL!5e0!3m2!1sen!2sar!4v1638246793270!5m2!1sen!2sar"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section><!-- End Map Section -->

    <style>
      .qr-desktop{
        position: fixed;
        top:20%;
        right:2%;
        padding: 12px 12px 30px;
        text-align: center;
        width: 180px;
        height: 200px;
        background: #FFFFFF;
        border-radius: 14px;
        box-shadow: 3px 3px 10px #89837F;
        z-index: 100;
        color: #231D19;
        font-size: 0.75rem;
    }
    .qr-desktop img{
        width: 130px;
        height: 130px;
    }
    .cta-box-fixed{
        display: none !important;
    }

    @media screen and (max-width: 767px) {
      .qr-desktop{
        display: none !important;
    }
    .cta-box-fixed{
        display: block;
        position: fixed;
        bottom:2px;
        text-align: center;
        height: 90px;
        background: #FFFFFF;
        border-radius: 3px;
        box-shadow: 3px 3px 10px #89837F;
        z-index: 100;
        color: #231D19;
        font-size: 1rem;
    }
    .cta-box-fixed p{
        margin-bottom: 0.25rem;
        

    }
    }

    </style>
    <div class="qr-desktop" data-aos="fade-down" data-aos-delay="500">
      <img  class="mx-auto" src="./assets/img/qrcode_5782565_.png" alt="Escaneá el QR">
      <p class="pt-2">¡Escaneá el QR para escribirnos!</p>
    </div>
    <div class="row col-12 cta-box-fixed" data-aos="fade-up">
      <p class="pt-2">Escribinos al whatsapp</p>
      <button class="btn btn-primary btn-whatsapp col-10 mb-5 mx-auto" href="https://api.whatsapp.com/send?phone=5491154692000&text=Hola!"></span>Abrir en WhatsApp</button>
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Newsletter</h4>
            <p>Suscribite para recibir las novedades mensuales del colegio</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div> -->
      </div>
    </div>

    <div class="container">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>