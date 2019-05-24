@extends('layouts.sistema')
@section('title'," Registrar articulo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Añadir articulo al inventario
			</div>
			<div class="card-body">
			{!! Form::open(['route' => 'inventarios.store' ])  !!}
				@include('inventarios.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection