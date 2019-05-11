@extends('layouts.sistema')
@section('title'," Editar entrada" )
@section('content') 
<div class="container">
	<div class="col-md-12">
		<div class="card text-center m-2">
			<div class="card-header h5">
				Editar entrada
			</div>
			<div class="card-body">
			{!! Form::model($post, ['route' => ['posts.update', $post->id], 
			'method'=> 'PUT', 'files'=> true])  !!}
				@include('admin.posts.partials.form')
			{!! Form::close() !!}
			</div>

			<div class="card-footer text-muted">

			</div>
			
		</div>

	</div>
</div>
@endsection