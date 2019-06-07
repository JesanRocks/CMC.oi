@extends('layouts.sistema')
@section('title'," Departamentos" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		
		<div class="card text-center m-2">
			<div class="card-header h4">
				Listado de Departamentos 
				<div class="d-flex justify-content-end">
					<a href="{{ route('departamentos.create') }}" class="btn btn-primary ml-5 ">
					<i class="fas fa-plus-square"></i> Crear 
				</a>
				</div>
			</div>
			<div class="card-body p-0">
			<table class="table table-hover">
				<thead class="bg-dark">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th colspan="3">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($departamentos as $departamento)
					<tr>
						<td>{{$departamento->id}}</td>
						<td>{{$departamento->nombre}}</td>

						<td width="10px">
							<a href="{{ route('departamentos.show', $departamento->id) }}" 
							class="btn btn-warning"><i class="far fa-eye"></i><span class="d-none d-md-block d-lg-none">Ver</span></a>
						</td>

						<td width="10px">
							<a href="{{ route('departamentos.edit', $departamento->id) }}" 
							class="btn btn-warning"><i class="fas fa-edit"></i><span class="d-none d-md-block d-lg-none">Editar</span></a>
						</td>

						<td width="10px">
							{!! Form::open(['route' => ['departamentos.destroy',$departamento->id ], 
							'method'=> 'DELETE' ])  !!}
								<button type="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> <span class="d-none d-md-block d-lg-none">Eliminar</span></button>
							{!! Form::close() !!}
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>

			</div>

			<div class="card-footer text-muted">
		    {{ $departamentos->render() }}
			</div>
			
		</div>

	</div>
</div>
@endsection