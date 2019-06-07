@extends('layouts.sistema')
@section('title'," Registrar subgrupo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Registrar subgrupo
			</div>
			<div class="card-body">
			{!! Form::open(['route' => 'subgrupos.store' ])  !!}
				@include('catalogo/subgrupos.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection