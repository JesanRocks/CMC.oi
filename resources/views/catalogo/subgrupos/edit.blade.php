@extends('layouts.sistema')
@section('title'," Editar subgrupo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar subgrupo
			</div>
			<div class="card-body">
			{!! Form::model($subgrupo, ['route' => ['subgrupos.update', $subgrupo->id], 
			'method'=> 'PUT'])  !!}
				@include('catalogo/subgrupos.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection