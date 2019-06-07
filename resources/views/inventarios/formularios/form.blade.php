{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="row">
{{-- El listado de los articulos viene de la variable "$articulos", que proviene del controlador "InventarioController" --}}
<div class="form-group col-6">
  {{ Form::label('articulo _id', 'Seleccione el tipo de articulo')}}
  {{ Form::select('articulo_id', $articulos, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-6">
  {{Form::label('cantidad', 'Cantidad')}}
  {{Form::number('cantidad', 1, ['class' => 'form-control']) }}
</div>

<div class="form-group col-4">
  {{Form::label('codigo', 'Codigo')}}
  {{Form::text('codigo', null, ['class' => 'form-control','placeholder'=>'CMMC-00000-0000']) }}
</div>

<div class="form-group col-4">
  {{ Form::label('grupo_id', 'Seleccione el Grupo')}}
  {{ Form::select('grupo_id', $grupos, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-4">
  {{Form::label('independiente', 'N° Independiente')}}
  {{Form::text('independiente', null, ['class' => 'form-control','placeholder'=>'0000']) }}
</div>

<div class="form-group col-3">
  {{Form::label('serial', 'Serial')}}
  {{Form::text('serial', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-3">
  {{Form::label('modelo', 'Modelo')}}
  {{Form::text('modelo', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-3">
  {{ Form::label('marca_id', 'Seleccione la marca')}}
  {{ Form::select('marca_id', $marcas, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-3">
  {{Form::label('color_id', 'Color')}}
  {{Form::select('color_id',  $colores, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-4">
	{{Form::label('incorp', 'Incorporación')}}
  <div class="input-group mb-3">
	    {{Form::text('incorp', null, ['class' => 'form-control' , 'aria-label'=>'Bs', 'aria-describedby'=>"extension"]) }}
	  <div class="input-group-append">
	    <span class="input-group-text" id="extension">Bs. S</span>
	  </div>
	</div>
</div>

<div class="form-group col-4">
	{{Form::label('desincorp', 'Desincorporación')}}
  <div class="input-group mb-3">
	    {{Form::text('desincorp', null, ['class' => 'form-control' , 'aria-label'=>'Bs', 'aria-describedby'=>"extension"]) }}
	  <div class="input-group-append">
	    <span class="input-group-text" id="extension">Bs. S</span>
	  </div>
	</div>
</div>

<div class="form-group col-4">
  {{ Form::label('departamento _id', 'Departamento')}}
  {{ Form::select('departamento_id', $departamentos, null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-12">
  {{Form::label('observacion', 'Observacion')}}
  {{Form::textarea('observacion', null, ['class' => 'form-control']) }}
</div>


</div>{{-- Fin del row --}}

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>