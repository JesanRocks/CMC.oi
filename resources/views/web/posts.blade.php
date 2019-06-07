@extends('layouts.blog')
@section('content')
@section('titulo'," Inicio")
<div class="container">
	<div class="col-md-12">
		<h1 class="display-4 text-center">Listado de articulos</h1>
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
