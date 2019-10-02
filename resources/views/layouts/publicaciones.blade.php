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

            .nav-pills .nav-link.active, .show>.nav-pills .nav-link{ background: #000000 !important}

            .mall{ margin-top: 100px; margin-bottom: 100px;}

            .size{ height: 50px; transition: all 1s ease;}

            .background{ background:url('{{ asset('image/bg.jpg') }}'); background-repeat: no-repeat;               background-position: center bottom; background-attachment: fixed;                background-size: cover; }
            .stroke { text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;}
   </style>

    </head>
    <body class="background" data-spy="scroll" data-target=".navbar" data-offset="500" >
        <div id="app" class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark  transparent">
                <a class="navbar-brand" href="">
                    <img class="nav-img" src="{{ asset('image/logo_abmc325.png') }}" height="120px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto nav-pills align-content-center text-white">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('blog') }}"><i class="fas fa-arrow-circle-left"></i> Inicio <span class="sr-only">(current)</span></a>
                    </li>                   
                </ul>
                @guest
                    <form class="form-inline my-2 my-lg-0">
                      <a class="btn btn-outline-secondary" href="{{ route('login') }}">Iniciar sesión</a>
                    </form>
                @else
                    <form class="form-inline my-2 my-lg-0">
                      <a class="btn btn-outline-secondary" href="{{ route('sistema') }}">Sistema</a>
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
                        <a href="#Contacto" class="btn btn-light btn-lg">Contactanos</a>
                        
                        <a href="#Entradas" class="btn btn-light btn-lg">Entradas</a>
                    </div>
                </div>{{-- Fin del col--}}
                
                <div class="col-12 animated bounceInRight bg-light mall"  id="Entradas">
                    @yield('content') 
                    @yield('busqueda')
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