<div class="form-group">
	{{Form::label('codigo', 'Codigo del grupo')}}
	{{Form::text('codigo', null, ['class' => 'form-control', 'id'=> 'codigo']) }}
</div>

<div class="form-group">
  {{Form::label('dsc', 'Descripción')}}
  {{Form::textarea('dsc', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>