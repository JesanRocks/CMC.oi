@extends('layouts.sistema')
@section('title'," Subgrupos" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		
		<div class="card text-center m-2">
			<div class="card-header h4">
				Consultar Subgrupos
				<div class="d-flex justify-content-between">
					<a href="{{ route('sistema') }}" class="btn btn-primary ml-5">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>
					<a href="{{ route('subgrupos.create') }}" class="btn btn-primary ml-5 ">
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
					@foreach($subgrupos as $subgrupo)
					<tr>
						<td>{{$subgrupo->id}}</td>
						<td class="text-justify">{{$subgrupo->dsc}}</td>

						<td width="10px">
							<a href="{{ route('subgrupos.show', $subgrupo->id) }}" 
							class="btn btn-warning"><i class="far fa-eye"></i><span class="d-none d-md-block d-lg-none">Ver</span></a>
						</td>

						<td width="10px">
							<a href="{{ route('subgrupos.edit', $subgrupo->id) }}" 
							class="btn btn-warning"><i class="fas fa-edit"></i><span class="d-none d-md-block d-lg-none">Editar</span></a>
						</td>

						<td width="10px">
							{!! Form::open(['route' => ['subgrupos.destroy',$subgrupo->id ], 
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
		    {{ $subgrupos->render() }}
			</div>
			
		</div>

	</div>
</div>
@endsection