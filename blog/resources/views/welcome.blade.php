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
            <li class="active"><a href="#intro">Bienvenido</a></li>
            <li><a href="#quienes">Quienes Somos</a></li>
            <li><a href="#service">Servicios</a></li>
            <li><a href="#doctor">Doctores</a></li>
            <li><a href="#facilities">Equipos</a></li>
            @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                <li><a href="{{ route('login') }}">Iniciar</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
                @endauth
            @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">Veterinaria Auxilio Animal</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Proporcionar la mejor atención médica de calidad para usted</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Más de 20 años de experiencia</strong><br />Auxilio Animal te ofrece uno de los mejores servicios de la zona.</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Personal calificado</strong><br />Nuestro centro apoyado en un personal altamente cualificado.</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Servicios veterinarios</strong><br />Contámos con una gran variedad de servicios veterinarios.</span></li>
                  </ul>
                  <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                    <a href="#" class="btn btn-skin btn-lg">Aprende Más <i class="fa fa-angle-right"></i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-stethoscope fa-4x circled bg-skin"></i>
                <h4 class="h-bold">Medicina y Cirugía</h4>
                <p>
                  Medicina Interna, <br>Medicina Preventiva, <br>Geriatría, <br>Cirugía General.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-user-md fa-4x circled bg-skin"></i>
                <h4 class="h-bold">Especialista</h4>
                <p>
                  Medicina Felina, <br>Oftalmología, <br>Dermatología, <br>Cardiologíabr
                  , <br>Odontología, <br>Oncología.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-flask fa-4x circled bg-skin"></i>
                <h4 class="h-bold">Laboratorio</h4>
                <p>
                  Análisis clínico.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-desktop fa-4x circled bg-skin"></i>
                <h4 class="h-bold">Diagnóstico</h4>
                <p>
                  Radiología digital y <br>Ecografía.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->
    <section id="quienes" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Nosotros</h2>
                <p>Desde su inauguración en 1990 ha centrado su actividad en prestar servicios a pequeños animales de compañía, siempre con una filosofía fresca dirigida en todo momento al bienestar de los animales y de sus propietarios.</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-lg-offset-2">
            <div>
              <div class="section-heading text-center">
                <h1 class="h-bold">Misión</h1>
                <p>Proporcionar servicios integrales de la más alta calidad para las mascotas a través de sistemas preventivos, emergentes y de medicina interna para así mejorar la salud de las personas incrementando la relación Humano-Animal.</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
          <div class="col-lg-3 col-lg-offset-2">
            <div>
              <div class="section-heading text-center">
                <h1 class="h-bold">Visión</h1>
                <p>Contar con un Hospital Veterinario de Especialidades único en la zona, con  sucursales que abarquen toda la área de la ciudad, satisfaciendo la necesidad de servicios veterinarios para personas que buscan trato profesional y especializado.</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>   
        </div>
      </div>
    </section>


    <section id="service" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>Nuestras Especialidades</h3>
                      <p>Atendida por un grupo de profesionales con amplia experiencia, que cree en el trabajo en equipo, como forma de ofrecer un mejor servicio. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="index/img/dummy/img-1.jpg" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-user-md fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Medicina Interna</h5>
                  <p>Abarca un amplio grupo de enfermedades.<a href="{{ url('/medicinainterna') }}" class="btn btn-skin btn-lg">Aprende Más <i class="fa fa-angle-right"></i></a></p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-eye fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Oftalmología</h5>
                  <p>Enfermedades oculares pueden tratarse con éxito.<a href="{{ url('/oftalmologia') }}" class="btn btn-skin btn-lg">Aprende Más <i class="fa fa-angle-right"></i></a></p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-search-plus fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Dermatología</h5>
                  <p>Emfermedades de la piel que pueden tratarse.<a href="{{ url('/dermatologia') }}" class="btn btn-skin btn-lg">Aprende Más <i class="fa fa-angle-right"></i></a></p>
                </div>
              </div>
            </div>


          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-heart fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Cardiología</h5>
                  <p>Problemas del corazon que pueden tratarse.<a href="{{ url('/cardiologia') }}" class="btn btn-skin btn-lg">Aprende Más <i class="fa fa-angle-right"></i></a></p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-smile-o fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Odontología</h5>
                  <p>Enfermedad periodontal es la patología más frecuente.<a href="{{ url('/medicinainterna') }}" class="btn btn-skin btn-lg">Aprende Más <i class="fa fa-angle-right"></i></a></p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-medkit fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Oncología</h5>
                  <p>Tratamiento del cancer con quimioterapias.<a href="{{ url('/medicinainterna') }}" class="btn btn-skin btn-lg">Aprende Más <i class="fa fa-angle-right"></i></a></p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- /Section: services -->


    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Nuestro Equipo</h2>
                <p>La medicina es la única profesión universal que en todas partes sigue los mismos métodos, actúa con los mismos objetivos y busca los mismos fines.</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Todos (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".cardiologist" class="cbp-filter-item">Cardiologo (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".psychiatrist" class="cbp-filter-item">Dermatologo (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".neurologist" class="cbp-filter-item">Oncologo (
                <div class="cbp-filter-counter"></div>)</div>
            </div>

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                <li class="cbp-item psychiatrist">
                  <a href="index/doctors/member1.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="index/img/team/1.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="index/doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                  <div class="cbp-l-grid-team-position">Dermatologo</div>
                </li>
                <li class="cbp-item cardiologist">
                  <a href="index/doctors/member2.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="index/img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="index/doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                  <div class="cbp-l-grid-team-position">Cardiologo</div>
                </li>
                <li class="cbp-item cardiologist">
                  <a href="index/doctors/member3.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="index/img/team/3.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="index/doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                  <div class="cbp-l-grid-team-position">Cardiologo</div>
                </li>
                <li class="cbp-item neurologist">
                  <a href="index/doctors/member4.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="index/img/team/4.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="index/doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                  <div class="cbp-l-grid-team-position">Oncologo</div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Equipos de trabajo</h2>
                <p>Contamos con la tecnología mas moderna de la actualidad</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                <div class="item"><img src="index/img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                <div class="item"><img src="index/img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><img src="index/img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><img src="index/img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><img src="index/img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                <div class="item"><img src="index/img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: works -->
 
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Acerca de Auxilio Animal</h5>
                <p>
                  Somos una Clínica Veterinaria a servicio de nuestra población.
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Information</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratorio</a></li>
                  <li><a href="#">Tratamiento médico</a></li>
                  <li><a href="#">Terminos y condiciones</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Centro Médico Veterinario</h5>
                <p>
                  Creada en 1990, fue transformada en clínica veterinaria en el año 2000 y remodelada en su totalidad en 2010.
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                </span> Lunes - Sábado, 9am a 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                </span> +591 69834662
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                </span> auxilioanimal@gmail.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Nuestra Ubicacion</h5>
                <p>Av. Versalles Nº 9245, Zona Senkata</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Síguenos</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;2019 - Auxilio Animal. Todos los derechos reservados.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

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
