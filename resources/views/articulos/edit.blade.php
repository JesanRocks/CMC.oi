@extends('layouts.sistema')
@section('title'," Editar articulo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar articulo
			</div>
			<div class="card-body">
			{!! Form::model($articulo, ['route' => ['articulos.update', $articulo->id], 
			'method'=> 'PUT'])  !!}
				@include('articulos.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection