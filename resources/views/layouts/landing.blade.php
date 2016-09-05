<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Historia Clinica ">
    <meta name="author" content="larr86">


    <title>Historia Clinica</title>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('/css/icomoon.css') }}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body>

    <div class="gtco-loader"></div>
    
    <div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 text-right gtco-contact">
                    <ul class="">
                        <li><a href="#"><i class="ti-mobile"></i> +52 (899) 155-5666 </a></li>
                        <li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
                        <li><a href="#"><i class="icon-mail2"></i></a></li>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="{{ url('/') }}">Historia Clinica <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}"">Home</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li class="has-dropdown">
                            <a href="#">Servicios</a>
                            <ul class="dropdown">
                                <li><a href="#">Regeneracion Celular</a></li>
                            </ul>
                        </li>
                        </li>
                        <li><a href="#gtco-portfolio">Portafolio</a></li>
                        <li><a href="#gtco-subscribe">Contacto</a></li>
                        <li class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                            @else
                                <li><a href="/home">{{ Auth::user()->name }}</a></li>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url( {{ asset('/img/banner.png') }} );">
        <!-- <div class="overlay"></div> -->
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="display-t">
                        <div class="display-tc">
                            <h1 class="animate-box" data-animate-effect="fadeInUp">LLEVANDOTE AL SIGUIENTE NIVEL</h1>
                            <p class="animate-box" data-animate-effect="fadeInUp"><a href="#gtco-subscribe" class="btn btn-danger btn-lg btn-outline">Contactanos</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="gtco-features-3">
        <div class="gtco-container">
            <div class="gtco-flex">
                <div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
                        <span class="icon">
                            <i class="ti-search"></i>
                        </span>
                        <h3>Directorio Medico</h3>
                        <p>Nuestra clinica cuenta con mas de 50 medicos generales y especialista en diferentes areas.</p>
                        <p><a href="#" class="btn btn-white btn-outline">Buscar</a></p>
                    </div>
                </div>
                <div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
                        <span class="icon">
                            <i class="ti-cup"></i>
                        </span>
                        <h3>Certificados</h3>
                        <p>Todos nuestros medicos, especialistas y tratamientos cumplen las mas grandes normas de certificacion </p>
                        <p><a href="#" class="btn btn-white btn-outline">Conocer</a></p>
                    </div>
                </div>
                <div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
                        <span class="icon">
                            <i class="ti-money"></i>
                        </span>
                        <h3>Financiamiento</h3>
                        <p>Conozca sobre nuestros planes de financiamiento.</p>
                        <p><a href="#" class="btn btn-white btn-outline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Historia Clinica</h2>
                    <p>Somos el centro más especializado de la ciudad, ofreciéndote una amplia variedad de servicios que ponemos a tu disposición:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-vector"></i>
                        </span>
                        <h3>Regeneracion Celular</h3>
                        <p>Tratamientos de Terapia Celular por medio de Células Madre para el tratamiento de enfermedades crónico degenerativas como la Insuficiencia Renal, Diabetes, Autismo, Osteoporosis y Articulaciones. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-slice"></i>
                        </span>
                        <h3>Cirugia Plastica</h3>
                        <p>Especialistas en Cirugía Estética y Anti Envejecimiento, contamos con los tratamientos y procedimientos cosméticos mas avanzados de la industria, te proporcionamos las mejores alternativas, tanto faciales, como corporales.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-heart"></i>
                        </span>
                        <h3>Cardiologia</h3>
                        <p>Tecnologia de nueva generacion para detectar  padecimientos cardíacos, como el ecocardiograma (ultrasonido), Holter (estudio para las palpitaciones) y pruebas de esfuerzo (infarto o angina), entre otros.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-eye"></i>
                        </span>
                        <h3>Oftalmologia</h3>
                        <p>Ofrecemos a nuestros pacientes un adecuado trato correctivo para la miopía, la hipermetropía y el astigmatismo con equipos de tecnología de punta, como amaris y médicos capacitados en cirugía refractiva.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="gtco-portfolio" class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Portafolio</h2>
                    <p>Nuestro trabajo de calidad nos avala y habla por nosotros.</p>
                </div>
            </div>

            <div class="row row-pb-md">
                <div class="col-md-12">
                    <ul id="gtco-portfolio-list">
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('/img/img_1.jpg') }} ); "> 
                            <a href="#" class="color-1">
                                <div class="case-studies-summary">
                                    <span>Regeneracion Celular</span>
                                    <h2>Tratamiento de celulas madre: Antes y Despues</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('/img/img_2.jpg') }} ); ">
                            <a href="#" class="color-2">
                                <div class="case-studies-summary">
                                    <span>Cirugia Plastica:</span>
                                    <h2>Liposuccion</h2>
                                </div>
                            </a>
                        </li>


                        <li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('img/img_3.jpg') }} ); ">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                    <span>Fundacion Ayuda</span>
                                    <h2>Cirugia Reconstructiva</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('img/img_4.jpg') }} ); ">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <span>Fundacion Ayuda:</span>
                                    <h2>Donacion de Medicinas</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('img/img_5.jpg') }} ); "> 
                            <a href="#" class="color-5">
                                <div class="case-studies-summary">
                                    <span>Cirugia Lasik</span>
                                    <h2>Correcion de Miopia y Astigmatismo</h2>
                                </div>
                            </a>
                        </li>
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url( {{ asset('/img/img_6.jpg') }} ); ">
                            <a href="#" class="color-6">
                                <div class="case-studies-summary">
                                    <span>Cardiologia</span>
                                    <h2>Cirugia Vascular</h2>
                                </div>
                            </a>
                        </li>
                    </ul>       
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center animate-box">
                    <a href="#" class="btn btn-white btn-outline btn-lg btn-block">Conoce Nuestro Trabajo</a>
                </div>
            </div>

            
        </div>
    </div>
    
<!-- fun facts

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Fun Facts</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="ti-settings"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Creativity Fuel</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="ti-face-smile"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="ti-briefcase"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Projects Done</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="ti-time"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Hours Spent</span>

                    </div>
                </div>
                    
            </div>
        </div>
    </div> -->

    <div id="gtco-products">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Productoss</h2>
                    <p>Algunos de nuestros productos</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="{{ asset('img/img_1.jpg') }}" alt="Imagen 1">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/img_2.jpg') }}" alt="Imagen 2">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/img_3.jpg') }}" alt="Imgen 3">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/img_4.jpg') }}" alt="Imgen 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div id="gtco-subscribe">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Contacto</h2>
                    <p>Cotiza, Aclara tus dudas o Dejanos tu comentario.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-12">
                    <form class="form-inline">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="name" class="sr-only">Nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="form-group">
                                <label for="name" class="sr-only">Comentario</label>
                                <input type="textarea" class="form-control" id="name" placeholder="Comentario">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p   b-md">

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>Nosotros</h3>
                        <p>Historial Clinico cuenta con mas de 30 años de experiencia llevando a la comunidad servicios de salud de primer nivel. Contamos con prestigiados espcielistas certificados y tratamientos de la mejor calidad.</p>
                    </div>
                </div>

                <div class="col-md-4 col-md-push-1">
                    <div class="gtco-widget">
                        <h3>Enlaces</h3>
                        <ul class="gtco-footer-links">
                            <li><a href="#">Trabaja con Nosotros</a></li>
                            <li><a href="#">Prensa</a></li>
                            <li><a href="#">Terminos de Servicio</a></li>
                            <li><a href="#">Politica de Privacidad</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>Contacto</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +52 (899) 155-5666</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@historiaclinica.com</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Chat en Vivo</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2016 Derechos Reservados.</small> 
                        <small class="block">Diseño por <a href="http://deltainstall.com" target="_blank">larr86</a>
                    </p>
                    <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
<!-- jQuery -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('/js/jquery.countTo.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/js/magnific-popup-options.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
