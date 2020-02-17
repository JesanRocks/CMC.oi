<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cámara Municipal del Municipio Cedeño - @yield('titulo')</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
        <style type="text/css" media="screen">        
            .transparent{ background: transparent; background-color: transparent; transition: all 1s ease;}

            /*.nav-pills .nav-link.active, .show>.nav-pills .nav-link{ background: #000000 !important}*/

            .mall{ margin-top: 100px; margin-bottom: 100px;}

            .size{ height: 50px; transition: all 1s ease;}

            .background{ background: url('image/bg.jpg'); background-repeat: no-repeat;               background-position: center bottom; background-attachment: fixed;                background-size: cover;}
            .stroke { text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;}
        </style>
    </head>
    <body class="background" data-spy="scroll" data-target=".navbar" data-offset="500" >
        <div id="app" class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark transparent">
                <a class="navbar-brand" href="">
                    <img class="nav-img" src="{{ asset('image/logo_abmc325.png') }}" height="120px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto nav-pills align-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#inicio">&nbsp;&nbsp;Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Publicaciones">&nbsp;&nbsp;Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Institución">&nbsp;&nbsp;Institución</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Esctructura">&nbsp;&nbsp;Esctructura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Galeria">&nbsp;&nbsp;Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Contacto">&nbsp;&nbsp;Contacto</a>
                    </li>                    
                </ul>
                @guest
                    <form class="form-inline my-2 my-lg-0">
                      <a class="btn btn-secondary" href="{{ route('login') }}">Iniciar sesión</a>
                    </form>
                @else
                    <form class="form-inline my-2 my-lg-0">
                      <a class="btn btn-secondary" href="{{ route('sistema') }}">Panel administrativo</a>
                    </form>
                @endguest
            </nav>{{-- Fin del nav--}}  
            
            <div class="row" id="inicio">
                <div class="col-sm-12 mx-auto animated bounceInLeft slower" style="margin-top: 90px;">
                    <h1 class="display-4 text-center mt-5 text-white stroke animated zoomIn retraso-3">Cámara Municipal<br> del<br> Municipio Cedeño</h1>
                    <hr>
                    <p class="d-flex text-justify m-3 lead text-white pl-5 pr-5 stroke">
                        Trabajamos por el municipio Cedeño y su gente, para tener una gestión optima del pueblo para el pueblo...
                    </p>
                    <div class="mx-auto" style="width:250px;">                       
                        <a href="#Contacto" class="btn btn-light btn-sm">Contactanos</a>
                        
                        <a href="#Publicaciones" class="btn btn-light btn-sm">Publicaciones</a>
                    </div>
                </div>{{-- Fin del col--}}
                
                <div class="col-12 animated bounceInRight bg-light mall"  id="Publicaciones">
                    {{--<posts-component></posts-component>--}}    @yield('content') 
                </div>

                <div class="col-12 animated bounceInRight"  id="Institución">
                    <div class="card-deck" style="margin-top:90px;">
                      <div class="card" id="caja1">
                        <div class="card-img-top text-center mt-4" >
                            <i class="fas fa-globe-americas display-1"></i>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-center lead">Misión</h5>
                          <p class="card-text text-justify">Cumplir la función legislativa con el objetivo de dictar el ordenamiento jurídico municipal para un mejor funcionamiento de la gestión pública local y la participación del ciudadano. Así como también ejercer el control político sobre los órganos ejecutivos del poder público municipal.
                          </p>
                          <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                      </div>{{-- Fin del card --}}
                      <div class="card" id="caja2">
                        <div class="card-img-top text-center mt-4">
                            <i class="fas fa-eye display-1"></i>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-center lead">Visión</h5>
                          <p class="card-text text-justify">Dictar el ordenamiento jurídico municipal bajo los principios constitucionales y conforme al modelo de democracia participativa y de corresponsabilidad social con la finalidad de impulsar el crecimiento y desarrollo sustentable del Municipio de acuerdo con el plan municipal de desarrollo y las políticas de desarrollo nacional, estatal y municipal.</p>
                          <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                      </div>{{-- Fin del card --}}
                      <div class="card" id="caja3">
                        <div class="card-img-top text-center mt-4">
                            <i class="fas fa-hands-helping display-1"></i>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-center lead">Objetivos</h5>
                          <p class="card-text text-justify">                        
                            <ol>
                                <li class="m-0 p-0">Garantizar el cumplimiento de las leyes y ordenanzas establecidas. </li>
                                <li class="m-0 p-0"> Aprobar el presupuesto de gastos que soporte su plan legislativo anual, tomando en cuenta las limitaciones financieras del Municipio</li>
                                <li class="m-0 p-0"> Promover los mecanismos que legalmente le estén conferidos y que contribuyan a garantizar en forma eficiente, suficiente y oportuna la participación ciudadana en el proceso de formación ejecución, control y evaluación de las gestión pública municipal </li>
                                <li class="m-0 p-0"> Incrementar y propiciar el grado de compromiso del concejo municipal con el colectivo, a los fines de satisfacer las expectativas y necesidades de la comunidad </li>
                            </ol>
                        </p>
                          <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                      </div>{{-- Fin del card --}}
                    </div>{{-- Fin del card-deck --}}   
                </div>{{-- Fin del col--}}
                
                <div class="col-12 animated bounceInRight bg-info"  id="Esctructura">
                    <h1 class="display-5 text-center" style="margin-top: 90px;">Esctructura organizativa</h1>
                    <div class="d-flex">
                        <div class="organigrama mx-auto mt-5">
                            <img class="img-fluid" src="{{ asset('image/organigrama.png') }}" alt="Organigrama">
                        </div>
                    </div>
                </div>{{-- Fin del col--}}

                <div class="col-12 animated bounceInRight bg-light mall"  id="Galeria">

                    <h1 class="display-5 text-center" style="margin-top: 90px;">Galeria</h1>
                    @yield('galeria')

                </div>

                <div class="col-12 animated bounceInRight bg-primary mall"  id="Contacto">
                    <div class="row">
                        <h1 class="display-5 text-center col-xs-12 col-sm-12" style="margin-top: 90px;">Contacto</h1>
                        <div class="col-xs-12 col-md-6"><h5>LUNES A JUEVES.</h5>
                            MAÑANA: 8:00 AM - 12:00 PM / TARDE:  2:00 PM - 4:00 PM <br><br>
                            <h5>VIERNES.</h5>
                            CORRIDO: 8:00 AM - 1:00 PM <br><br>
                            <h5>DIAS DE DESCANSO SEMANAL.</h5> SABADOS Y DOMINGOS <br><br>   
                            <h5>TELEFONOS:</h5> (0292) 744 28 16 / (0416) 933 52 96 <br><br>
                            <h5>CORREO:</h5> <br><br>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <h5>UBICACIÓN.h5><br>
                            CALLE CEDEÑO FRENTE A LA PLAZA BOLÍVAR CAICARA MUNICIPIO CEDEÑO ESTADO MONAGAS<br>
                            <div class="embed-responsive embed-responsive-1by1">
                                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d708.9913663877929!2d-63.616980000000005!3d9.812797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xebe7062b9a1aedbd!2sCamara%20Municipal!5e1!3m2!1ses-419!2sve!4v1569901330626!5m2!1ses-419!2sve" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div><br><br>

                </div>


            </div>{{-- Fin del row --}}

            <div class="row">
                <footer class="col-12 bg-dark text-center p-5">
                    <span class="text-white"><i class="far fa-copyright"></i>Cámara Municipal del Municipio Cedeño -2019<br>Caicara - Estado Monagas<br>RIF - G-20009010-3<hr></span>

                   <div class="container mt-3">
                    <a href="https://www.facebook.com/cmmc" class="btn btn-outline-light"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.twitter.com/cmmc" class="btn btn-outline-light"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/cmmc" class="btn btn-outline-light"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/cmmc" class="btn btn-outline-light"><i class="fab fa-instagram"></i></a>
                   </div><!-- /container redes -->
                </footer>                
            </div>{{-- Fin del row --}}
        </div>{{-- Fin del container fluid --}}
    
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    <script> 
        // Cambio de fondo en navbar, agregando clase "bg-dark", al bajar 56px
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 56) {
                $(".navbar").addClass("bg-dark ");
            } else {
                $(".navbar").removeClass("bg-dark ");
            }
          });

        $(window).scroll(function() {
            if ($(".nav-img").offset().top > 56) {
                $(".nav-img").addClass("size");
            } else {
                $(".nav-img").removeClass("size");
            }
          });
    </script>
</html>
