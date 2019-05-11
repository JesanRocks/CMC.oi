@extends('layouts.sistema')
@section('title'," Editar categoria" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar categoria
			</div>
			<div class="card-body">
			{!! Form::model($category, ['route' => ['categories.update', $category->id], 
			'method'=> 'PUT'])  !!}
				@include('admin.categories.partials.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection