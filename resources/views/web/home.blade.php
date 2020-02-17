@extends('layouts.portafolio')
@section('titulo'," Inicio")
@section('content')

<div class="container">
	<div class="col-md-12 mt-3">
		<div class="shadow-lg p-3 mb-4 bg-info rounded" style="margin-top: 90px;">
			<h1 class="text-left">Publicaciones recientes</h1>
		</div>

{{--     @if(isset($details))
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
    @endif --}}

		<div class="card-columns">
		@foreach($posts as $post)

			<div class="card">
			  @if($post->file)
					<img src="{{ $post->file }}" class="card-img-top img-fluid">
				@endif
			    <div class="card-body">
			      <h5 class="card-title text-dark">
			      	<a href="{{ route('post',$post->slug) }}">
			      		{{ $post->name }}
			      	</a>
			      </h5>
			      <p class="card-text text-dark">{{ $post->excerpt}}</p>
			      <p class="card-text">
			      	<small class="text-muted">Publicado el: {{ $post->created_at }}</small>
			      </p>
			    </div>
			</div>
		@endforeach
		</div>
	</div>
		
	<div class="col-12 mb-3">
      <a href="{{ route('publicaciones') }}" class="btn btn-info btn-block">Ver más publicaciones</a>  
      {{-- {{ $posts->render() }} --}}
	</div>
</div>
@endsection

{{-- @section('busqueda')
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

</div>
@endsection--}}
@section('galeria')
<div class="container">
   
    <div class="row mt-5">
    @foreach($photos as $photo)
      <div class="col-xs-12 col-md-4 col-lg-3">
        <div class="card p-1">
        @if($photo->file)
          <img src="{{$photo->file}}" class="card-img-top img-fluid" data-toggle="modal" data-target=".{{$photo->slug}}">
        @endif
  
  <div class="modal fade {{$photo->slug}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <img src="{{ $photo->file }}" class="card-img-top img-fluid">
      </div>
    </div>
  </div>


        </div>
      </div>  
    @endforeach
{{--   <div class="col-12 d-flex">
    <div class="mx-auto">    {{ $photos->render() }}</div>
  </div> --}}
    </div>{{--  Fin del row --}}
</div> {{-- fin del container--}}
@endsection