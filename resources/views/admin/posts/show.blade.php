@extends('layouts.sistema')
@section('title'," Ver entrada" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Ver entrada
				<div class="d-flex justify-content-between">
					<a href="{{ route('posts.index') }}" class="btn btn-primary ml-5">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>
				</div>
			</div>
			<div class="card-body">
				<p><strong>Nombre: </strong> {{$post->name }}</p>
				<p><strong>Slug: </strong> {{$post->slug }}</p>
				<p><strong>Contenido: </strong> {{$post->body }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection