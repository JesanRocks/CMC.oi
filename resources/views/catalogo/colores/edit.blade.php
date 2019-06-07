@extends('layouts.sistema')
@section('title'," Editar color" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar color
			</div>
			<div class="card-body">
			{!! Form::model($color, ['route' => ['colores.update', $color->id], 
			'method'=> 'PUT'])  !!}
				@include('catalogo/colores.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection