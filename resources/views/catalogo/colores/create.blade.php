@extends('layouts.sistema')
@section('title'," Registrar color" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Registrar color
			</div>
			<div class="card-body">
			{!! Form::open(['route' => 'colores.store' ])  !!}
				@include('catalogo/colores.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection