@extends('layouts.blog')
@section('titulo'," Inicio")
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">        
        <div class="carousel-item active bg-secondary">
            <img style="height: 250px;" src="{{ asset('image/concejales.jpg') }}" class="d-block w-100" alt="...">
           	<div class="carousel-caption d-none d-md-block ">
            	<h5 class="text-danger display-4">Somos un equipo</h5>
	        </div>
	    </div>

        <div class="carousel-item bg-warning">
            <img style="height: 250px;" src="{{ asset('image/slider1.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h5>Trabajamos por ti</h5>
        	</div>
        </div>

        <div class="carousel-item bg-dark ">
            <img style="height: 250px;" src="{{ asset('image/slider1.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Somos un equipo</h5>
        	</div>
        </div>
	</div>
</div>

<div class="container">
	<div class="col-md-12 mt-3">
		<div class="shadow-lg p-3 mb-4 bg-danger rounded">
			<h1 class="text-left">Publicaciones</h1>
		</div>

    @if(isset($details))
    <div  class="alert alert-primary" role="alert">
      <h4 class="alert-heading">Búsqueda</h4>
      <p>
        Resultados obtenidos por: <b>{{$query}}</b>
      </p>
    </div>
    @elseif(isset($message))
    <div class="alert alert-primary" role="alert">
      <h4 class="alert-heading">¡No se encontraron resultados!</h4>
      <p>{{$message}}</p>     
      <hr>
      <p class="mb-0">Prueba con diferentes palabras clave.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

		<div class="card-columns">
		@foreach($posts as $post)

			<div class="card">
			    @if($post->file)
					<img src="{{ $post->file }}" class="card-img-top img-fluid">
				@endif
			    <div class="card-body">
			      <h5 class="card-title">
			      	<a href="{{ route('post',$post->slug) }}">
			      		{{ $post->name }}
			      	</a>
			      </h5>
			      <p class="card-text">{{ $post->excerpt}}</p>
			      <p class="card-text">
			      	<small class="text-muted">Publicado el: {{ $post->created_at }}</small>
			      </p>
			    </div>
			</div>
		@endforeach
		</div>
	</div>
		
	<div class="col-12">
		{{ $posts->render() }}
	</div>
</div>
@endsection

@section('busqueda')
<form action="{{ route('search') }}" method="get" accept-charset="utf-8">
  <div class="input-group mt-3 mb-3">
    <input type="text" class="form-control" placeholder="Buscar publicación" aria-label="Recipient's username" aria-describedby="button-addon2" name="search" required>
    <div class="input-group-append">
      <input class="btn btn-danger" type="submit" value="Buscar" id="button-addon2">
    </div>
  </div>
</form>
@endsection

@section('categorias')
<div class="card">
  <div class="card-header bg-secondary">
    Categorias
  </div>
<div class="card-body">
  @foreach($categorias as $categoria)
  <a href="{{ route('category',$categoria->slug) }}" class="badge badge-primary p-1">
  	{{$categoria->name}}<!--span class="badge badge-secondary p-1">12</span-->
  </a>
  @endforeach
</div>

{{--   <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio
    	<span class="badge badge-danger">4</span>
    </li>
    <li class="list-group-item">Dapibus ac facilisis in
    	<span class="badge badge-danger">4</span>
    </li>
    <li class="list-group-item">Vestibulum at eros
    	<span class="badge badge-danger">4</span>
    </li>
  </ul> --}}
</div>
@endsection