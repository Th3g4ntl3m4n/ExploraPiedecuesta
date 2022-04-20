@php

use App\Models\Agency;

$agencies = Agency::all();

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Explora Piedecuesta | Turismo </title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('/css/nice-select.css') }}" rel="stylesheet">
<link href="{{ asset('/css/jquery-ui.css') }}" rel="stylesheet">
<link href="{{ asset('/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="E" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="X" class="letters-loading">
                                x
                            </span>
                            <span data-text-preloader="P" class="letters-loading">
                                p
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                a
                            </span>
                        </div>
                        <div class="txt-loading">
                            <span data-text-preloader="PIEDECUESTA" class="letters-loading">
                                PIEDECUESTA
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header style-one">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="{{ asset('/images/logo/Logo_Explora.png') }}" alt="Explora Piedecuesta"></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                       <li class="current dropdown"><a href="/">Inicio</a>

                                        </li>
                                        <li class="dropdown"><a href="#">La Ciudad Garrotera</a>
                                            <ul>
                                                <li><a href="/ciudad-garrotera">Información General</a></li>
                                                <li><a href="/herencia-garrotera">Herencia Garrotera </a></li>
                                                <li><a href="/fiestas-celebraciones">Fiestas y Celebraciones</a></li>
                                                <li><a href="/como-llegar">¿Cómo llegar al municipio?</a></li>
                                                <li><a href="/guia-del-viajero">Guía de conducta del viajero</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">¿Qué visitar?</a>
                                            <ul>
                                                <li><a href="/naturaleza">Naturaleza</a></li>
                                                <li><a href="/cultura">Cultura</a></li>
                                                <li><a href="destination-details.html">Bienestar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">¿Qué hacer?</a>
                                          <ul>
                                              <li><a href="destination.html">Plan para Uno</a></li>
                                              <li><a href="destination-2.html">Plan Pareja</a></li>
                                              <li><a href="destination-details.html">Plan Familia</a></li>
                                              <li><a href="destination-details.html">Plan Amigos</a></li>
                                          </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Pa' que se ubique</a>
                                            <ul>
                                              <li><a href="/guias-turisticos">Guías turísticos</a></li>
                                                <li><a href="about.html">Restaurantes</a></li>

                                            </ul>
                                      <!--  </li>
                                        <li class="dropdown"><a href="index.html">Elements</a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-xl-6 column">
                                                        <ul>
                                                            <li><h4>Elements 1</h4></li>
                                                            <li><a href="about-element-1.html">About Block 01</a></li>
                                                            <li><a href="about-element-2.html">About Block 02</a></li>
                                                            <li><a href="about-element-3.html">About Block 03</a></li>
                                                            <li><a href="feature-element-1.html">Feature Block 01</a></li>
                                                            <li><a href="feature-element-2.html">Feature Block 02</a></li>
                                                            <li><a href="tour-element-1.html">Tour Block 01</a></li>
                                                            <li><a href="tour-element-2.html">Tour Block 02</a></li>
                                                            <li><a href="place-element-1.html">Place Block 01</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-6 column">
                                                        <ul>
                                                            <li><h4>Elements 2</h4></li>
                                                            <li><a href="place-element-2.html">Place Block 02</a></li>
                                                            <li><a href="news-element-1.html">News Block 01</a></li>
                                                            <li><a href="news-element-2.html">News Block 02</a></li>
                                                            <li><a href="team-element-1.html">Team Block 01</a></li>
                                                            <li><a href="team-element-2.html">Team Block 02</a></li>
                                                            <li><a href="video-element.html">Video Block</a></li>
                                                            <li><a href="funfact-element.html">Funfact Block</a></li>
                                                            <li><a href="testimonial-element.html">Testimonial Block</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>-->

                                        <li class="dropdown"><a href="/galeria">Galería</a>
                                        </li>
                                            <!--<ul>
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog-2.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>-->
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                                    <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-link">
                                <a href="dashboard"><i class="icon-Profile"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="{{ asset('/images/logo/Logo_Explora.png') }}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                                    <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="user-link">
                                <a href="signup.html"><i class="icon-Profile"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

      @yield('main_content')



        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('/images/logo/Logo_Explora.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->





        <!-- main-footer -->
        <footer class="main-footer bg-color-2">
            <div class="footer-top">
                <div class="vector-bg" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="{{ asset('/images/logo/Logo_Explora.png') }}" alt="Explora Piedecuesta"></a></figure>
                                <div class="text">
                                    <p>El nombre Piedecuesta es el resultado de la abreviación dada al sitio, parroquia y villa del "Pie de la
Cuesta" a inicios del siglo XIX por el gobierno central de la República de Colombia a través de sus
leyes, decretos y comunicaciones oficiales al estar ubicada en su caso urbano una de las factorías de
tabacos más importantes del Estado.</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Servicios</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Acerca de Nosotros</a></li>
                                        <li><a href="index.html">Te escuchamos</a></li>
                                        <li><a href="index.html">Cómo funciona</a></li>
                                        <li><a href="index.html">Nuestras Agencias</a></li>
                                        <li><a href="index.html">Nuestros Planes</a></li>
                                        <li><a href="index.html">Contáctenos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget gallery-widget">
                                <div class="widget-title">
                                    <h3>Galería</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="image-list clearfix">
                                        <li><figure class="image-box"><a href="/galeria"><img src="{{ asset('/images/gallery/explora-piedecuesta-chicamocha-turismo-90.jpg') }}" alt="cañon del chicamocha explora piedecuesta"></a></figure></li>
                                        <li><figure class="image-box"><a href="/galeria"><img src="{{ asset('/images/gallery/explora-piedecuesta-mora-turismo-90.jpg') }}" alt="mora explora piedecuesta"></a></figure></li>
                                        <li><figure class="image-box"><a href="/galeria"><img src="{{ asset('/images/gallery/explora-piedecuesta-parque-principal-turismo-90.jpg') }}" alt="parque principal explora piedecuesta"></a></figure></li>
                                        <li><figure class="image-box"><a href="/galeria"><img src="{{ asset('/images/gallery/explora-piedecuesta-salto-del-duende-turismo-90.jpg') }}" alt="salto del duende explora piedecuesta"></a></figure></li>
                                        <li><figure class="image-box"><a href="/galeria"><img src="{{ asset('/images/gallery/explora-piedecuesta-tabaco-turismo-90.jpg') }}" alt="tabaco explora piedecuesta"></a></figure></li>
                                        <li><figure class="image-box"><a href="/galeria"><img src="{{ asset('/images/gallery/explora-piedecuesta-vino-mora-turismo-90.jpg') }}" alt="vino de mora explora piedecuesta"></a></figure></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacto</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>Municipo de Piedecuesta - Santander</li>
                                        <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:info@explorapiedecuesta.com">info@explorapiedecuesta.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p><a href="index.html">Municipio de Piedecuesta</a> &copy; 2021 Todos los derechos reservados</p>
                        </div>
                        <ul class="footer-nav pull-right">
                            <li><a href="index.html">Términos y condiciones</a></li>
                            <li><a href="index.html">Política de Privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('/js/jquery.js') }}" ></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/owl.js') }}"></script>
    <script src="{{ asset('/js/wow.js') }}"></script>
    <script src="{{ asset('/js/validation.js') }}"></script>
    <script src="{{ asset('/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('/js/appear.js') }}"></script>
    <script src="{{ asset('/js/scrollbar.js') }}"></script>
    <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->
</html>
