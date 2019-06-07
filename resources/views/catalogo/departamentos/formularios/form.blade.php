{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{Form::label('nombre', 'Nombre del departamento')}}
	{{Form::text('nombre', null, ['class' => 'form-control', 'id'=> 'nombre']) }}
</div>

<div class="form-group">
  {{Form::label('dsc', 'Descripción')}}
  {{Form::textarea('dsc', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>