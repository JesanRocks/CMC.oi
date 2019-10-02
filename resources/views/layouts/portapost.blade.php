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

            .background{ background: url('{{ $post->file }}'); background-repeat: no-repeat;               background-position: center bottom; background-attachment: fixed;                background-size: cover;}
        </style>

        <script src="{{ asset('js/app.js') }}"></script>


    </head>
    <body class="background" data-spy="scroll" data-target=".navbar" data-offset="500">
        <div class="container-fluid ">
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
                        <a class="nav-link" href="{{ url('/blog') }}#inicio">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}#Entradas">Entradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}#Institución">Institución</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}#Galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}#Contacto">Contacto</a>
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
            
            <div class="row">
                <div class="col-sm-12 mx-auto animated bounceInLeft slower" style="margin-top: 90px;">
                    <h1 class="display-4 text-center mt-5 text-white">{{ $post->name }}</h1>
                    <hr>
                    <p class="text-justify m-3 lead text-white pl-5 pr-5">
                        {{ $post->excerpt}}
                    </p>
                    <p class="text-right m-3 lead text-white pl-5 pr-5">
                        <strong>Publicado el: <small>{{ $post->created_at }}</small></strong>
                    </p>
                </div>{{-- Fin del col--}}
            </div>{{-- Fin del row --}}

            <div class="row">    
                <div class="col-sm-8 bg-light text-justify" style="padding: 50px 100px 0px 100px;">
                    <p class="text-justify lead">
                        {!! $post->body !!}
                    </p>

                    <div class="m-5 text-muted text-left">
                        <b>Categoria:</b>
                        <a class="p-2 badge badge-info" href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
                        <hr>
                        <b>Etiquetas:</b>
                        @foreach($post->tags as $tag)
                            <a class="p-2 badge badge-primary" href="{{ route('tag', $tag->slug) }}" >{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-4 bg-light text-justify p-5">
                    <form action="{{ route('search') }}" method="get" accept-charset="utf-8">
                      <div class="input-group mt-3 mb-3">
                        <input type="text" class="form-control" placeholder="Buscar publicación" aria-label="Recipient's username" aria-describedby="button-addon2" name="search" required>
                        <div class="input-group-append">
                          <input class="btn btn-primary" type="submit" value="Buscar" id="button-addon2">
                        </div>
                      </div>
                    </form>

                    <div class="card">
                        <div class="card-header bg-secondary">
                            Categorias
                        </div>
                        <div class="card-body">
                          @foreach($categorias as $categoria)
                          <a href="{{ route('category',$categoria->slug) }}" class="btn btn-info btn-sm">{{$categoria->name}}</a> <hr>
                          @endforeach
                        </div> 

                    </div>
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
    <script> 
        // Cambio de fondo en navbar, agregando clase "bg-dark", al bajar 56px
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 80) {
                $(".navbar").addClass("bg-dark ");
            } else {
                $(".navbar").removeClass("bg-dark ");
            }
          });

        $(window).scroll(function() {
            if ($(".nav-img").offset().top > 80) {
                $(".nav-img").addClass("size");
            } else {
                $(".nav-img").removeClass("size");
            }
          });
    </script>
</html>
