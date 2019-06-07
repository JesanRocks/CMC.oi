@extends('layouts.sistema')
@section('title'," Descripción del marca" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del marca
			</div>
			<div class="card-body">
				<p><strong>Nombre: </strong> {{$marca->nombre }}</p>
				<p><strong>Descripción: </strong> {{$marca->dsc }}</p>
				<p><strong>Fecha de registro: </strong> {{$marca->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection