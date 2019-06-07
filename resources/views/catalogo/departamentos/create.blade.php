@extends('layouts.sistema')
@section('title'," Registrar departamento" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Registrar departamento
			</div>
			<div class="card-body">
			{!! Form::open(['route' => 'departamentos.store' ])  !!}
				@include('catalogo/departamentos.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection