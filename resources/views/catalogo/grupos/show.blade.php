@extends('layouts.sistema')
@section('title'," Descripción del grupo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del grupo
			</div>
			<div class="card-body">
				<p><strong>Codigo: </strong> {{$grupo->codigo }}</p>
				<p><strong>Descripción: </strong> {{$grupo->dsc }}</p>
				<p><strong>Fecha de registro: </strong> {{$grupo->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection