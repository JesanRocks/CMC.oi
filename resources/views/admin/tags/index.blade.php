@extends('layouts.sistema')
@section('title'," Etiquetas" ) 
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Listado de etiquetas <a href="{{ route('tags.create') }}" class="btn btn-primary ml-5"><i class="fas fa-plus-square"></i> Crear </a>
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
					@foreach($tags as $tag)
					<tr>
						<td>{{$tag->id}}</td>
						<td>{{$tag->name}}</td>

						<td width="10px">
							<a href="{{ route('tags.show', $tag->id) }}" 
							class="btn btn-info"><i class="far fa-eye"></i> <span class="d-none d-md-block d-lg-none">Ver</span></a>
						</td>

						<td width="10px">
							<a href="{{ route('tags.edit', $tag->id) }}" 
							class="btn btn-info"><i class="fas fa-edit"></i> <span class="d-none d-md-block d-lg-none">Editar</span></a>
						</td>

						<td width="10px">
							{!! Form::open(['route' => ['tags.destroy',$tag->id ], 
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
		    {{ $tags->render() }}
			</div>
			
		</div>

	</div>
</div>
@endsection