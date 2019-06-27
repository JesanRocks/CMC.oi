{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
  {{ Form::label('subgrupo_id', 'Seleccione el Subgrupo')}}
  {{ Form::select('subgrupo_id', $subgrupos, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::label('codigo', 'Codigo del articulo')}}
	{{Form::text('codigo', null, ['class' => 'form-control', 'id'=> 'codigo']) }}
</div>

<div class="form-group">
  {{Form::label('dsc', 'Descripción')}}
  {{Form::textarea('dsc', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>