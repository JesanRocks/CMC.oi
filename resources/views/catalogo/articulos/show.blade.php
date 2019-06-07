@extends('layouts.sistema')
@section('title'," Descripción del articulo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del articulo
			</div>
			<div class="card-body">
				<p><strong>Codigo: </strong> {{$articulo->codigo }}</p>
				<p><strong>Descripción: </strong> {{$articulo->dsc }}</p>
				{{-- Buscar incluir nombre del responsable --}}
				<p><strong>Añadido por: </strong> {{ $articulo->user_id }}</p>

				<p><strong>Fecha de registro: </strong> {{$articulo->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection