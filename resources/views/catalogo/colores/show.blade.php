@extends('layouts.sistema')
@section('title'," Descripción del color" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del color
			</div>
			<div class="card-body">
				<p><strong>Nombre: </strong> {{$color->nombre }}</p>
				<p><strong>Descripción: </strong> {{$color->dsc }}</p>
				<p><strong>Fecha de registro: </strong> {{$color->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection