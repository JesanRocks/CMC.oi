@extends('layouts.sistema')
@section('title'," Descripción del subgrupo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del subgrupo
			</div>
			<div class="card-body">
				<p><strong>Nombre: </strong> {{$subgrupo->nombre }}</p>
				<p><strong>Descripción: </strong> {{$subgrupo->dsc }}</p>
				<p><strong>Grupo: </strong> {{$subgrupo->grupo->dsc }}</p>
				<p><strong>Fecha de registro: </strong> {{$subgrupo->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection