<div class="form-group">
  {{ Form::label('grupo_id', 'Seleccione el Grupo')}}
  {{ Form::select('grupo_id', $grupos, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::label('codigo', 'Codigo del subgrupo')}}
	{{Form::text('codigo', null, ['class' => 'form-control', 'id'=> 'codigo']) }}
</div>

<div class="form-group">
  {{Form::label('dsc', 'Descripción')}}
  {{Form::textarea('dsc', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>