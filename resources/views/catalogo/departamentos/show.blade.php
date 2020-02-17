@extends('layouts.sistema')
@section('title'," Descripción del departamento" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del departamento
				<div class="d-flex justify-content-between">
					<a href="{{ route('departamentos.index') }}" class="btn btn-primary ml-5">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>
				</div>
			</div>
			<div class="card-body">
				<p><strong>Nombre: </strong> {{$departamento->nombre }}</p>
				<p><strong>Descripción: </strong> {{$departamento->dsc }}</p>
				<p><strong>Fecha de registro: </strong> {{$departamento->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection