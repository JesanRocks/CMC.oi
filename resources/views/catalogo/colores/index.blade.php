@extends('layouts.sistema')
@section('title'," Colores" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		
		<div class="card text-center m-2">
			<div class="card-header h4">
				Listado de Colores 
				<div class="d-flex justify-content-end">
					<a href="{{ route('colores.create') }}" class="btn btn-primary ml-5 ">
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
					@foreach($colores as $color)
					<tr>
						<td>{{$color->id}}</td>
						<td>{{$color->nombre}}</td>

						<td width="10px">
							<a href="{{ route('colores.show', $color->id) }}" 
							class="btn btn-warning"><i class="far fa-eye"></i><span class="d-none d-md-block d-lg-none">Ver</span></a>
						</td>

						<td width="10px">
							<a href="{{ route('colores.edit', $color->id) }}" 
							class="btn btn-warning"><i class="fas fa-edit"></i><span class="d-none d-md-block d-lg-none">Editar</span></a>
						</td>

						<td width="10px">
							{!! Form::open(['route' => ['colores.destroy',$color->id ], 
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
		    {{ $colores->render() }}
			</div>
			
		</div>

	</div>
</div>
@endsection