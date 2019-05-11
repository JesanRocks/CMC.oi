@extends('layouts.sistema')
@section('title'," Usuarios" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Listado de Usuarios <a href="{{ route('usuarios.create') }}" class="btn btn-primary ml-5"><i class="fas fa-plus-square"></i> Crear </a>
			</div>
			<div class="card-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th colspan="3">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $usuario)
					<tr>
						<td>{{$usuario->id}}</td>
						<td>{{$usuario->name}}</td>

						<td width="10px">
							<a href="{{ route('usuarios.show', $usuario->id) }}" 
							class="btn btn-warning"><i class="far fa-eye"></i> Ver </a>
						</td>

						<td width="10px">
							<a href="{{ route('usuarios.edit', $usuario->id) }}" 
							class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
						</td>

						<td width="10px">
							{!! Form::open(['route' => ['usuarios.destroy',$usuario->id ], 
							'method'=> 'DELETE' ])  !!}
								<button type="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
							{!! Form::close() !!}
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>

			</div>

			<div class="card-footer text-muted">
		    {{ $usuarios->render() }}
			</div>
			
		</div>

	</div>
</div>
@endsection