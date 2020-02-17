@extends('layouts.sistema')
@section('title'," Editar subgrupo" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar subgrupo
				<div class="d-flex justify-content-between">
					<a href="{{ route('subgrupos.index') }}" class="btn btn-primary ml-5">
						<i class="fas fa-arrow-circle-left"></i> Volver 
					</a>
				</div>
			</div>
			<div class="card-body">
			{!! Form::model($subgrupo, ['route' => ['subgrupos.update', $subgrupo->id], 
			'method'=> 'PUT'])  !!}
				@include('catalogo/subgrupos.formularios.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection