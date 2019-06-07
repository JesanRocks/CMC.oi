<div class="form-group">
	{{Form::label('nombre', 'Nombre del color')}}
	{{Form::text('nombre', null, ['class' => 'form-control', 'id'=> 'nombre']) }}
</div>

<div class="form-group">
  {{Form::label('dsc', 'Descripción')}}
  {{Form::textarea('dsc', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>