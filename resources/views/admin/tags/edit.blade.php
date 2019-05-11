@extends('layouts.sistema')
@section('title'," Editar etiqueta" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar etiqueta
			</div>
			<div class="card-body">
			{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 
			'method'=> 'PUT'])  !!}
				@include('admin.tags.partials.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection