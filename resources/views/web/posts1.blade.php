@extends('layouts.blog')
@section('content')
@section('titulo'," Inicio")

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">        
        <div class="carousel-item active bg-secondary">
            <img style="height: 250px;" src="{{ asset('image/slider1.png') }}" class="d-block w-100" alt="...">
           	<div class="carousel-caption d-none d-md-block">
            	<h5>Camará Municipal</h5>
	        </div>
	    </div>

        <div class="carousel-item bg-warning">
            <img style="height: 250px;" src="{{ asset('image/slider1.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
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
		<h1 class="display-5 text-justify">Listado de articulos</h1>
		@foreach($posts as $post)
		<div class="card text-center m-2">
			<div class="card-header h5">
				{{ $post->name }}
			</div>
			<div class="card-body">
				@if($post->file)
					<img src="{{ $post->file }}" class="card-img-top img-fluid">
				@endif
				
				<p class="card-text text-justify"> 
					{{ $post->excerpt}}
				</p>

				<a href="{{ route('post',$post->slug) }}" class="btn btn-primary">Leer más...</a>
			</div>

			<div class="card-footer text-muted">
		    	<strong>Publicado el: <small>{{ $post->created_at }}</small></strong>
			</div>
			
		</div>
		@endforeach
		{{ $posts->render() }}
	</div>
</div>
@endsection
