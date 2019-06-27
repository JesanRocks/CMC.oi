<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Cámara Municipal del Municipio Cedeño - @yield('titulo')</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{  asset('js/app.js') }}"></script>
    <link rel="shortcut icon" type="image/x-icon" href="image/fav.ico">
 </head>
 <body  style="background-color: #f4cd82;  overflow-x:hidden;">
  <nav class="container-fluid navbar navbar-dark navbar-expand-lg col-md-12 bg-danger">
    <a class="navbar-brand btn btn-outline-light">
     <img class="img-fluid" src="{{ asset('image/logo_abmc325.png') }}" width="40" height="40">
    </a>
     
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>       
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('blog') }}">
         <i class="fas fa-home"></i> Inicio <span class="sr-only"></span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-university"></i> Institución
        </a>              
         <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-history"></i> Reseña historica
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('institucion') }}">
          <i class="fas fa-address-card"></i> ¿Quienes somos?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('organizacion') }}">
            <i class="fas fa-sitemap"></i> Organización
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('contacto') }}">
           <i class="fas fa-address-book"></i> Contacto
          </a>
         </div>
      </li>

      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-film"></i> Multimedia
       </a>
       <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('galeria') }}">
          <i class="fas fa-images"></i> Galería
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="fas fa-video"></i> Vídeos</a>
       </div>
      </li>

      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-globe-americas"></i> Tramites en linea
       </a>
                
       <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#"><i class="fas fa-file"></i> Ordenanzas</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="fas fa-file"></i> Derecho de palabra</a>
       </div>
      </li>
      
{{--       @foreach($categories as $category)
        <li class="nav-item active">
        <a class="nav-link" href="{{ url('categorias/..') }}">
         <i class="fas fa-home"></i> {{ $category->name }} <span class="sr-only"></span>
        </a>
      </li>
      @endforeach --}}

   </ul><!-- /ul -->
 @guest
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-secondary" href="{{ route('login') }}">Iniciar sesión</a>
    </form>
  @else
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-secondary" href="{{ route('sistema') }}">Sistema</a>
    </form>
  @endguest
    </div><!-- / navbar collapse --> 
  </nav><!-- /nav navbar --> 
  
  <section class="row m-auto">
    <article class="col-xs-12 col-lg-9 p-1 m-0">    
     @yield('content')
    </article><!-- /article -->
    <aside class="col-xs-12 col-lg-3 border" style="background-color: #e3e4e5;">
     <h3 class="shadow p-3 mb-3 rounded mt-2 p-1 h6 text-white text-center" style="background-color: #b32821;">
      ¡Enlaces!
     </h3>

      <div class="card mb-3">
        <img src="/image/logo_abmc.png" class="card-img-top" alt="...">
        <div class="card-body">
{{--           <h5 class="card-title">Alcaldia del Municipio Cedeño</h5> --}}
        </div>
      </div>

    </aside><!-- /aside -->
  </section><!-- /section --> 
  <footer  class="footer mt-auto py-3 text-center" style="background-color: #DC143C;">
   <div class="container">
    <span class="text-white"><i class="far fa-copyright"></i> 2019 - Cámara Municipal del Municipio Cedeño <br> Caicara - Estado Monagas <br> RIF - G-20009010-3</span>
   </div><!-- /container alcaldia-->
   <div class="container mt-3">
    <a href="https://www.facebook.com/cmmc" class="btn btn-outline-light"><i class="fab fa-facebook"></i></a>
    <a href="https://www.twitter.com/cmmc" class="btn btn-outline-light"><i class="fab fa-twitter"></i></a>
    <a href="https://www.youtube.com/cmmc" class="btn btn-outline-light"><i class="fab fa-youtube"></i></a>
    <a href="https://www.instagram.com/cmmc" class="btn btn-outline-light"><i class="fab fa-instagram"></i></a>
   </div><!-- /container redes -->
  </footer><!-- /footer -->
     @yield('scripts') 
   </body>
</html>