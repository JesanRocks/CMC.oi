@extends('layouts.sistema')
@section('title'," Descripción del articulo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del bien en el inventario
				<div class="d-flex justify-content-between">
					<a href="{{ route('inventarios.index') }}" class="btn btn-primary">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table table-hover">
					<tr>
						<td class="bg-dark">Articulo</td>
						<td>{{ $inventario->articulo->dsc }}</td>
					</tr>
					<tr>
						<td class="bg-dark">Codigo</td>
						<td>{{ $inventario->codigo }}</td>
					</tr>
					<tr>
						<td class="bg-dark">Grupo</td>
						<td>{{ $inventario->grupo->codigo }}</td>
					</tr>
					<tr>
						<td class="bg-dark">N° Indep.</td>
						<td>{{ $inventario->independiente }}</td>
					</tr>
					<tr>
						<td class="bg-dark">S/N°</td>
						<td>{{ $inventario->serial }}</td>
					</tr>
					<tr>
						<td class="bg-dark">Modelo</td>
						<td>{{ $inventario->modelo }}</td>
					</tr>
					<tr>
						<td class="bg-dark">Marca</td>
						<td>{{ $inventario->marca->nombre }}</td>
					</tr>
					<tr>
						<td class="bg-dark">Color</td>
						<td>{{ $inventario->color->nombre }}</td>
					</tr>

					<tr>
						<td class="bg-dark">Incorp</td>
						<td>{{ $inventario->incorp }} Bs</td>
					</tr>
					<tr>
						<td class="bg-dark">Desincorp</td>
						<td>{{ $inventario->desincorp }} Bs</td>
					</tr>
					<tr>
						<td class="bg-dark">Observación</td>
						<td>{{ $inventario->observacion }}</td>
					</tr>
					<tr>
						<td class="bg-dark">Fecha de registro</td>
						<td>{{$inventario->created_at }}</td>
					</tr>
				</table>

			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection