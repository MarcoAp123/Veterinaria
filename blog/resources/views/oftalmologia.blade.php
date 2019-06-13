<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Auxilio | Animal</title>

  <!-- css -->
  <link href="index/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="index/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="index/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="index/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="index/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="index/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="index/css/animate.css" rel="stylesheet" />
  <link href="index/css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="index/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="index/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Lunes - Sábado, 9:00 am a 10:00 pm </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Llámanos ahora +591 69824662</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>        
          <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paw fa-2x "></i> AUXILIO ANIMAL</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
                <li><a href="{{ url('/medicinainterna') }}">Medicina Interna</a></li>
                <li><a href="{{ url('/oftalmologia') }}">Oftalmologia</a></li>
                <li><a href="{{ url('/dermatologia') }}">Dermatologia</a></li>
                <li><a href="{{ url('/cardiologia') }}">Cardiologia</a></li>
                <li><a href="{{ url('/odontologia') }}">Odontologia</a></li>
                <li><a href="{{ url('/oncologia') }}">Oncologia</a></li>
            @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                @endauth
            @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Section: intro -->
<section id="quienes" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <div class="section-heading text-center"><img src="index/img/dummy/s2.jpg" class="img-responsive" alt="" /><br>
                <h2 class="h-bold">Oftalmología</h2>
                <p>El Servicio de Oftalmología ofrece diagnóstico y tratamiento de los trastornos oculares en perros, gatos, caballos y animales exóticos. Ofrece un soporte especializado a los veterinarios y a los clientes con animales que presentan problemas oculares habituales o poco frecuentes como queratitis seca, cataratas, glaucoma, inflamación del ojo, tumores, problemas de párpados y enfermedades de la retina. Este servicio también realiza exámenes de aptitud reproductiva para animales de pura raza, detección de enfermedades oculares congénitas y exámenes anuales para la detección precoz de enfermedades oculares hereditarias o relacionadas con la edad.

                El Servicio de Oftalmología ofrece procedimientos especializados como:

                Examen ocular completo: Biomicroscopía, tonometría, gonioscopia, test de Schirmer, colorantes vitales, citología, oftalmoscopia directa e indirecta, etc;
                tratamiento de cataratas por facoemulsificación e implante de lentes intraoculares;
                trasplante de córnea;
                tratamiento médico, quirúrgico o con láser del glaucoma;
                retinografía, electrorretinografía y potenciales visuales evocados;
                angiografía fluoresceínica;
                tratamientos con láser para desprendimiento de retina y tumores intraoculares;
                TC (escáner) ocular y de la órbita;
                ecografía ocular;
                cirugía reconstructiva de párpados;
                catéter subpalpebral para el tratamiento tópico en caballos;
                evisceraciones y prótesis oculares.</p>

              </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>
    </section>

  <!-- Core JavaScript Files -->
  <script src="index/js/jquery.min.js"></script>
  <script src="index/js/bootstrap.min.js"></script>
  <script src="index/js/jquery.easing.min.js"></script>
  <script src="index/js/wow.min.js"></script>
  <script src="index/js/jquery.scrollTo.js"></script>
  <script src="index/js/jquery.appear.js"></script>
  <script src="index/js/stellar.js"></script>
  <script src="index/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="index/js/owl.carousel.min.js"></script>
  <script src="index/js/nivo-lightbox.min.js"></script>
  <script src="index/js/custom.js"></script>

</body>

</html>
