@extends('layouts.sistema')
@section('title'," Crear usuario" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Crear usuario
			</div>
			<div class="card-body">
			{!! Form::open(['route' => 'usuarios.store' ])  !!}
				@include('usuarios.partials.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection