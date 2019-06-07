@extends('layouts.sistema')
@section('title'," Descripción del articulo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del articulo en el inventario
			</div>
			<div class="card-body p-0">
				<table class="table table-hover">
					<thead class="bg-dark">
						<tr>
							<th>Articulo</th>
							<th>Cod</th>
							<th>Grupo</th>
							<th>N° Indep.</th>
							<th>S/N°</th>
							<th>Modelo</th>
							<th>Marca</th>
							<th>Color</th>
							<th>Incorp</th>
							<th>Desincorp</th>
							<th>Observación</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
				<td>{{ $inventario->articulo->nombre }}</td>
				<td>{{ $inventario->codigo }} </td>
				<td>{{ $inventario->grupo->nombre }} </td>
				<td>{{ $inventario->independiente }} </td>
				<td>{{ $inventario->serial }} </td>
				<td>{{ $inventario->modelo }} </td>
				<td>{{ $inventario->marca->nombre }} </td>
				<td>{{ $inventario->color->nombre }} </td>
				<td>{{ $inventario->incorp }} Bs</td>
				<td>{{ $inventario->desincorp }} Bs</td>
				<td class="text-justify">{{ $inventario->observacion }} </td>
						</tr>
					</tbody>
				</table>

				{{-- <td><strong>Articulo: </strong> {{ $inventario->articulo->nombre }}</td>
				<td><strong>Cantidad:</strong> {{ $inventario->cantidad }} </td>
				<td><strong>Codigo:</strong> {{ $inventario->codigo }} </td>
				<td><strong>Grupo:</strong>  {{ $inventario->grupo->nombre }} </td>
				<td><strong>N° Independiente: </strong>  {{ $inventario->independiente }} </td>
				<td><strong>Serial: </strong>  {{ $inventario->serial }} </td>
				<td><strong>Modelo: </strong>  {{ $inventario->modelo }} </td>
				<td><strong>Marca: </strong>  {{ $inventario->marca->nombre }} </td>
				<td><strong>Color: </strong>  {{ $inventario->color->nombre }} </td>
				<td><strong>Incorporpación: </strong>  {{ $inventario->incorp }} Bs</td>
				<td><strong>Desincorpocación: </strong>  {{ $inventario->desincorp }} Bs</td>
				<td><strong>Observación: </strong>  {{ $inventario->observacion }} </td>
				Buscar incluir nombre del responsable 
				<td><strong>Añadido por: </strong> {{ $articulo->user_id }}</td>--}}

				<td><strong>Fecha de registro: </strong> {{$inventario->created_at }}</td>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection