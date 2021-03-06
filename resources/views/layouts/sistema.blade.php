<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> CMC | @yield('title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/scrollbar.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-danger navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('sistema') }}" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('blog') }}" class="nav-link">Página principal</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #b32821;  overflow-x:hidden;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center text-white">
      <img src="/image/logo_abmc.png" alt="CMC" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cámara Municipal<br>del<br>Municipio Cedeño</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-danger">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/image/masculino.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-3" style="margin-bottom: 70px;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Auth::user()->Administrador())
          <li class="nav-item has-treeview">
            <a href="{{ route('usuarios.index') }}" class="nav-link {{ request()->is('usuarios*') ? 'bg-dark' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Administrar usuarios
              </p>
            </a>
          </li>
          @endif
          <li class="nav-header">Módulos</li>
          
          @if(Auth::user()->Administrador() OR  Auth::user()->Escritor())
          <li class="nav-item has-treeview 
          {{ request()->is('tags*') ? 'menu-open' : '' }}
          {{ request()->is('categories*') ? 'menu-open' : '' }}
          {{ request()->is('posts*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Procesar publicaciones
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="ml-3 nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('tags*') ? 'bg-dark' : '' }}" href="{{ route('tags.index') }}">
                  <i class="fas fa-tags"></i>
                  <p>Etiquetas</p>
                </a>             
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('categories*') ? 'bg-dark' : '' }}" href="{{ route('categories.index') }}">
                  <i class="fas fa-folder-open"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('posts*') ? 'bg-dark' : '' }}" href="{{ route('posts.index') }}">
                  <i class="fas fa-newspaper"></i>
                  <p>Publicaciones</p>
                </a>             
              </li>
            </ul>
          </li>          
          @endif

          @if(Auth::user()->Administrador() OR  Auth::user()->Registrador())
          <li class="nav-item has-treeview
          {{ request()->is('grupos*') ? 'menu-open' : '' }}
          {{ request()->is('subgrupos*') ? 'menu-open' : '' }}
          {{ request()->is('articulos*') ? 'menu-open' : '' }}
          {{ request()->is('marcas*') ? 'menu-open' : '' }}
          {{ request()->is('colores*') ? 'menu-open' : '' }}
          {{ request()->is('departamentos*') ? 'menu-open' : '' }}
          {{ request()->is('inventarios*') ? 'menu-open' : '' }}
          ">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Gestionar inventario
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>

            <ul class="ml-3 nav nav-treeview">
              <li class="nav-item 
                        {{ request()->is('grupos*') ? 'menu-open' : '' }}
          {{ request()->is('subgrupos*') ? 'menu-open' : '' }}
          {{ request()->is('articulos*') ? 'menu-open' : '' }}
          {{ request()->is('marcas*') ? 'menu-open' : '' }}
          {{ request()->is('colores*') ? 'menu-open' : '' }}
          {{ request()->is('departamentos*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                  <i class="fa fa-box-open"></i>
                  <p>Catalogo de bienes
                  <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="ml-3 nav nav-treeview">
                  
                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('grupos*') ? 'bg-dark' : '' }}" href="{{ route('grupos.index') }}">
                      <i class="fas fa-folder-open"></i>
                      <p>Categorías</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('subgrupos*') ? 'bg-dark' : '' }}" href="{{ route('subgrupos.index') }}">
                      <i class="far fa-folder"></i>
                      <p>Subcategorías</p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('articulos*') ? 'bg-dark' : '' }}" href="{{ route('articulos.index') }}">
                      <i class="fas fa-box"></i>
                      <p>Artículos específicos</p>
                    </a>             
                  </li>

                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('marcas*') ? 'bg-dark' : '' }}" href="{{ route('marcas.index') }}">
                      <i class="fas fa-trademark"></i>
                      <p>Marcas</p>
                    </a>             
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('colores*') ? 'bg-dark' : '' }}" href="{{ route('colores.index') }}">
                      <i class="fas fa-palette"></i>
                      <p>Colores</p>
                    </a>             
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('departamentos*') ? 'bg-dark' : '' }}" href="{{ route('departamentos.index') }}">
                      <i class="fas fa-building"></i>
                      <p>Departamentos</p>
                    </a>             
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{ route('inventarios.index') }}" class="nav-link  {{ request()->is('inventarios*') ? 'bg-dark' : '' }}">
                  <i class="fas fa-arrow-alt-circle-right"></i>
                  <p>Inventario</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item has-treeview">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Salír</p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>              
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            @if(session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{session('info')}}
                        </div>
                    </div>
                </div> 
            </div>
            @endif

            @if(count($errors))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $error)  
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>

                        </div>
                    </div>
                </div> 
            </div>
            @endif

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
    
          @yield('content')
   
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <!-- To the right -->

    <strong><i class="far fa-copyright"></i> 2019 - Cámara Municipal del Municipio Cedeño <br> Caicara - Estado Monagas <br> RIF - G-20009010-3</span>.</strong>
  </footer>
</div>
<!-- ./wrapper -->
    @yield('scripts')
</body>
</html>