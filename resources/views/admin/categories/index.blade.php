@extends('layouts.sistema')
@section('title'," Categorias" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Listado de Categorias <a href="{{ route('categories.create') }}" class="btn btn-primary ml-5"> <i class="fas fa-plus-square"> </i>Crear </a>
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
					@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>

						<td width="10px">
							<a href="{{ route('categories.show', $category->id) }}" 
							class="btn btn-info"><i class="far fa-eye"></i> Ver </a>
						</td>

						<td width="10px">
							<a href="{{ route('categories.edit', $category->id) }}" 
							class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
						</td>

						<td width="10px">
							{!! Form::open(['route' => ['categories.destroy',$category->id ], 
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
		    {{ $categories->render() }}
			</div>
			
		</div>

	</div>
</div>
@endsection