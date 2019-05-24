@extends('layouts.sistema')
@section('title'," Descripción del articulo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card m-2">
			<div class="card-header text-center h5">
				Descripción del articulo en el inventario
			</div>
			<div class="card-body">
				<p><strong>Articulo: </strong> {{ $inventario->articulo->nombre }}</p>
				<p><strong>Cantidad:</strong> {{ $inventario->cantidad }} </p>
				<p><strong>Codigo:</strong> {{ $inventario->codigo }} </p>
				<p><strong>Grupo:</strong>  {{ $inventario->grupo }} </p>
				<p><strong>N° Independiente: </strong>  {{ $inventario->independiente }} </p>
				<p><strong>Serial: </strong>  {{ $inventario->serial }} </p>
				<p><strong>Modelo: </strong>  {{ $inventario->modelo }} </p>
				<p><strong>Marca: </strong>  {{ $inventario->marca }} </p>
				<p><strong>Color: </strong>  {{ $inventario->color }} </p>
				<p><strong>Incorporpación: </strong>  {{ $inventario->incorp }} Bs</p>
				<p><strong>Desincorpocación: </strong>  {{ $inventario->desincorp }} Bs</p>
				<p><strong>Observación: </strong>  {{ $inventario->observacion }} </p>
				{{-- Buscar incluir nombre del responsable 
				<p><strong>Añadido por: </strong> {{ $articulo->user_id }}</p>--}}

				<p><strong>Fecha de registro: </strong> {{$inventario->created_at }}</p>
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection