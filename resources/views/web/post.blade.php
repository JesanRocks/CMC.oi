@extends('layouts.blog')
@section('content')
<div class="container">
	<div class="col-md-12">
		<h1 class="display-4 text-center">{{ $post->name }}</h1>

		<div class="card text-center m-2">
			<div class="card-header h5">
				Categoria
				<a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
			</div>
			<div class="card-body">
				@if($post->file)
					<img src="{{ $post->file }}" class="card-img-top img-fluid">
				@endif
				
				<p class="card-text text-justify"> 
					{{ $post->excerpt}}
				</p>
				<hr>
				{!! $post->body !!}
				<hr>
				<strong>Publicado el: <small>{{ $post->created_at }}</small></strong>
			</div>

			<div class="card-footer text-muted">
		    	<b>Etiquetas:</b>
				@foreach($post->tags as $tag)
					<a href="{{ route('tag', $tag->slug) }}" class="p-2 badge badge-primary">{{ $tag->name }}</a>
				@endforeach
			</div>
			
		</div>

	</div>
</div>
@endsection