@extends('layouts.publicaciones')
@section('titulo'," Inicio")
@section('content')

<div class="container">
	<div class="col-md-12 mt-3">
		<div class="shadow-lg p-3 mb-4 bg-info rounded" style="margin-top: 90px;">
			<h1 class="text-left">Todas las publicaciones</h1>
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
		
	<div class="col-12 mb-3 d-flex">
      <div class="mx-auto">{{ $posts->render() }}</div>
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