@extends('layouts.blog')
@section('content')
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header">
				<h3>{{ $post->name }}</h3>
			</div>
			<div class="card-body">
				@if($post->file)
					<img src="{{ $post->file }}" class="card-img-top img-fluid">
				@endif
				
				<p class="card-text text-justify"> 
					{{ $post->excerpt}}
				</p>
				<hr>
				<p class="card-text text-justify">
					{!! $post->body !!} 
				</p>	
				<hr>
				<strong>Publicado el: <small>{{ $post->created_at }}</small></strong>
			</div>

			<div class="card-footer text-muted text-left">
				<b>Categoria:</b>
				<a class="p-2 badge badge-danger" href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
				<hr>
		    	<b>Etiquetas:</b>
				@foreach($post->tags as $tag)
					<a href="{{ route('tag', $tag->slug) }}" class="p-2 badge badge-primary">{{ $tag->name }}</a>
				@endforeach
			</div>
			
		</div>

	</div>
</div>
@endsection