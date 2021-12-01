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
  <link rel="stylesheet" href="assets/swalert/sweetalert2.min.css">
  <script src="assets/swalert/sweetalert2.all.min.js"></script>

  <!-- =======================================================
  * Template Name: Moderna - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bienvenidos<span></span></h2>
          <p class="animate__animated animate__fadeInUp" style="letter-spacing: 0.5px;">Comtemplari Mariam, aspici a Maria<br>Mirar a María y dejarnos mirar por María</p>
          <!-- <p class="animate__animated animate__fadeInUp">Mirar a María y dejarnos mirar por María</p> -->
          <a href="" class="animate__animated animate__fadeInUp"><img src="./assets/img/SM-Blanco.png" style="width:70px;"></a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Valores</h2>
          <p class="animate__animated animate__fadeInUp">La práctica de las virtudes y principios evangélicos se convierten en referencia y fundamento permanente de nuestra misión, movilizando el Proyecto Educativo.</p>
          <a href="ideario-prov.php" class="btn-get-started animate__animated animate__fadeInUp">Ver ideario</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">¿Quienes somos?</h2>
          <p class="animate__animated animate__fadeInUp">Somos una institución educativa católica de gestión privada perteneciente al Obispado Zárate Campana, que brinda una educación integral, para al progreso e inclusión de los niños y jóvenes de la comunidad de Belén de Escobar.</p>
          <a href="team.php" class="btn-get-started animate__animated animate__fadeInUp">Ver staff</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bi bi-tree"></i></div>
              <h4 class="title"><a href="#" id="click-alert">Mensaje por la navidad</a></h4>
              <p class="description" >Te invitamos a leer el mensaje de nuestro director por motivo de la navidad que se acerca.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <div class="icon"><i class="bi bi-trophy"></i></div>
              <h4 class="title"><a href="./portfolio-details.php">¡Ganamos!</a></h4>
              <p class="description">El nivel inicial fue distinguido por el programa "Escuelas por el Ambiente".<br>¡Seguimos construyendo juntos un mundo mejor!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bi bi-person-check"></i></div>
              <h4 class="title"><a href="./team.php">Docentes</a></h4>
              <p class="description">¿Conocés los docentes que forman parte de nuestra institución?<br>Click <a href="./team.php">acá</a> para verlos.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title" id="click-alert"><a href="#" >Próximos proyectos</a></h4>
              <p class="description">¡El 2022 se viene con todo! y un nuevo proyecto que hará participes a alumnos y ex alumnnos se pondrá en marcha.</p>            
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <!-- <img src="assets/img/why-us.jpg" class="img-fluid" alt=""> -->
            <img src="assets/img/Captura-2.PNG" class="img-fluid" alt="">
            <a href="https://drive.google.com/file/d/1_VB8QTRFKZaTJrnQsLTIivsKjSvUO_NH/view" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bi bi-instagram"></i></div>
              <h4 class="title"><a href="https://www.instagram.com/colegiosantamaria_escobar/">Instagram</a></h4>
              <p class="description">Este es nuestro canal oficial de instagram. Seguinos para estar actualizado</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-facebook"></i></div>
              <h4 class="title"><a href="">Facebook</a></h4>
              <p class="description">Este es nuestro canal oficial de Facebook. Entrá y mirá las ultimas novedades</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Conocé más sobre nosotros</h2>
          <p>Somos una institución educativa católica de gestión privada perteneciente al Obispado Zárate Campana, que brinda una educación integral, para al progreso e inclusión de los niños y jóvenes de la comunidad de Belén de Escobar.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/primaria.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Nivel inicial</h3>
            <p>
              En esta primera etapa en nuestra institución nuestro objetivo es educar para la vida, para ser y convivir en el mundo, favoreciendo la autonomía y la creatividad en nuestros niños. 
            </p>
            <!-- <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul> -->
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/secundaria.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Primaria</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p>
              En esta etapa educativa tenemos como objetivo principal garantizar que nuestros alumnos reciban una formación integral que contribuya al pleno desarrollo de su personalidad. La confianza, la escucha, el conocimiento profundo de cada alumno, el acompañamiento, están en la base de nuestra tarea educativa.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/staff.jfif" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Secundaria</h3>
            <p>
              La finalidad de nuestra Educación Secundaria consiste en lograr que nuestros jóvenes adquieran los elementos de la cultura, especialmente en sus aspectos humanístico, artístico, científico y tecnológico; desarrollar y consolidar en ellos hábitos de estudio y de trabajo; prepararlos para su incorporación a estudios posteriores y para su inserción laboral y formarlos para el ejercicio de sus derechos y obligaciones en la vida como ciudadanos.
<!-- Finalizado el tercer año los alumnos podrán elegir entre dos modalidades: Economía y Ciencias Sociales; al aprendizaje del Inglés se agregarán el Portugués y Francés, respectivamente. 
Durante esta etapa, mediante diversas actividades, buscamos que los jóvenes se comprometan e interactúen con la comunidad. -->

            </p>
            <!-- <ul>
              <li><i class="bi bi-arrow-right-short"></i> La finalidad de nuestra Educación Secundaria consiste en lograr que nuestros jóvenes adquieran los elementos de la cultura, especialmente en sus aspectos humanístico, artístico, científico y tecnológico; desarrollar y consolidar en ellos hábitos de estudio y de trabajo; prepararlos para su incorporación a estudios posteriores y para su inserción laboral y formarlos para el ejercicio de sus derechos y obligaciones en la vida como ciudadanos.</li>
              <li><i class="bi bi-arrow-right-short"></i> Finalizado el tercer año los alumnos podrán elegir entre dos modalidades: Economía y Ciencias Sociales; al aprendizaje del Inglés se agregarán el Portugués y Francés, respectivamente. Durante esta etapa, mediante diversas actividades, buscamos que los jóvenes se comprometan e interactúen con la comunidad.</li> -->
              <!-- <li><i class="bi bi-arrow-right-short"></i> </li> -->
            <!-- </ul> -->
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Pastoral</h3>
            <p class="fst-italic">
              La dimensión pastoral es transversal a todas las áreas del colegio. Busca promover espacios que faciliten el encuentro con Jesús.</p>
            <p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> Preparación para la recepción de Sacramentos.</li>
                <li><i class="bi bi-check2-circle"></i> Retiros y convivencias.</li>
                <li><i class="bi bi-check2-circle"></i> Momentos de espiritualidad.</li>
                <li><i class="bi bi-check2-circle"></i> Proyectos de carácter social.</li>
              </ul>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

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
            <form action="nicoamendolara@gmail.com" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
    <div class="container">
        <div class="row">

         <div class="col-lg-3 col-md-6 footer-links">
             <h4>acá van los logos de los convenios</h4>
             <!-- <img src="./assets/img/logo-utn.png"> -->
           <!-- <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul> -->
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>acá van los logos de los convenios</h4>
            <!-- <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
              <h4>acá van los logos de los convenios</h4>
             <!--  <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p> -->

          </div> 

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Colegio Santa María</h3>
            <p>Hipólito Yrigoyen 625, B1625 Belén de Escobar, Provincia de Buenos Aires.<br> Teléfonos de contacto: 0348 442-0676 / 11 5469 2000</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
     
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
  <script>


$('#click-alert').click(function(){
  Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})

});


    </script>
</body>

</html>