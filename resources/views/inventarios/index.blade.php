@extends('layouts.sistema')
@section('title'," Inventario" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		
		<div class="card text-center m-2">
			<div class="card-header h4">
				Inventario 
				<div class="d-flex justify-content-end">
					<a href="{{ route('inventarios.create') }}" class="btn btn-primary ml-5">
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
						<!--th>Cant.</th-->
						<th>Cod</th>
						<th>Grupo</th>
						<th>N° I.</th>
{{-- 						<th>Serial</th>
						<th>Modelo</th>
						<th>Marca</th>
						<th>Color</th>
						<th>Incorp.</th>
						<th>Desincorp.</th> 
						<th>Observación</th>--}}
						<th colspan="3">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($inventarios as $inventario)
					<tr>
						<td>{{$inventario->id}}</td>
{{-- Se define la variable, se llama al metodo (La relacion que se definió en el modelo) con el nombre del campo o atributo, de la tabla relacionada. --}}
						<td>{{$inventario->articulo->nombre}}</td>
						<td>{{$inventario->codigo}}</td>
						<td>{{$inventario->grupo->nombre}}</td>
						<td>{{$inventario->independiente}}</td>
						{{-- <td>{{$inventario->observacion}}</td> --}}

						<td width="10px">
							<a href="{{ route('inventarios.show', $inventario->id) }}" 
							class="btn btn-warning"><i class="far fa-eye"></i><span class="d-none d-md-block d-lg-none">Ver</span>  </a>
						</td>

						<td width="10px">
							<a href="{{ route('inventarios.edit', $inventario->id) }}" 
							class="btn btn-warning"><i class="fas fa-edit"></i><span class="d-none d-md-block d-lg-none">Editar</span> </a>
						</td>

						<td width="10px">
							{!! Form::open(['route' => ['inventarios.destroy',$inventario->id ], 
							'method'=> 'DELETE' ])  !!}
								<button type="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>  <span class="d-none d-md-block d-lg-none">Eliminar</span></button>
							{!! Form::close() !!}
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>

			</div>

			<div class="card-footer text-muted">
		    {{ $inventarios->render() }}
			</div>
			
		</div>

	</div>
</div>
@endsection