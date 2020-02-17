@extends('layouts.sistema')
@section('title'," Registrar articulo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Registrar bien en inventario
				<div class="d-flex justify-content-between">
					<a href="{{ route('inventarios.index') }}" class="btn btn-primary">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>
				</div>
			</div>
			<div class="card-body">
			{!! Form::open(['route' => 'inventarios.store' ])  !!}
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