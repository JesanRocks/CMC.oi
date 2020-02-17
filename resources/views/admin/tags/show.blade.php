@extends('layouts.sistema')
@section('title'," Ver etiqueta" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Ver etiqueta
				<div class="d-flex justify-content-between">
					<a href="{{ route('tags.index') }}" class="btn btn-primary ml-5">
						<i class="fas fa-arrow-circle-left"></i> Volver
					</a>
				</div>
			</div>
			<div class="card-body">
				<p><strong>Nombre: </strong> {{$tag->name }}</p>
				<p><strong>Slug: </strong> {{$tag->slug }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection