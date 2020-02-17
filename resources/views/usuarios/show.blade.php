@extends('layouts.sistema')
@section('title'," Ver etiqueta" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Ver registro
				<div class="d-flex justify-content-between">
					<a href="{{ route('usuarios.index') }}" class="btn btn-primary ml-5">
						<i class="fas fa-arrow-circle-left"></i> Volver
					</a>
				</div>
			</div>
			<div class="card-body">
				<!--p><strong>Foto de perfil: </strong><br> {{$usuario->name }}</p-->
				<p><strong>Nombre: </strong> {{$usuario->name }}</p>
				<p><strong>Correo: </strong> {{$usuario->email }}</p>
				<p><strong>Cargo: </strong>  {{$usuario->cargo->dsc }}</p>
				<p><strong>Fecha de registro: </strong> {{$usuario->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection