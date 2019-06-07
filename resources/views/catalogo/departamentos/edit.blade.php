@extends('layouts.sistema')
@section('title'," Editar departamento" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar departamento
			</div>
			<div class="card-body">
			{!! Form::model($departamento, ['route' => ['departamentos.update', $departamento->id], 
			'method'=> 'PUT'])  !!}
				@include('catalogo/departamentos.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection