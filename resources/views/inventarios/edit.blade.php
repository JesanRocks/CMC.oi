@extends('layouts.sistema')
@section('title'," Editar articulo del inventario" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar bien del inventario
				<div class="d-flex justify-content-between">
					<a href="{{ route('inventarios.index') }}" class="btn btn-primary">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>
				</div>
			</div>
			<div class="card-body">
			{!! Form::model($inventario, ['route' => ['inventarios.update', $inventario->id], 
			'method'=> 'PUT'])  !!}
				@include('inventarios.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection
@section('scripts') 
	<script type="text/javascript">
		var ident = '', grupo = '';

		var valueSelect = function(foo){
		  grupo = foo;
		  
		  document.getElementById('codigo').value = "CMMC-"+grupo+"-"+ident;
		};

		function valueInput(valor){
		  ident = valor;

		  document.getElementById('codigo').value = "CMMC-"+grupo+"-"+ident;
		}
	</script>
@endsection