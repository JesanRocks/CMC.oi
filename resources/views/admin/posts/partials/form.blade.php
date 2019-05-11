{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
  {{ Form::label('category _id', 'Categorias')}}
  {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{Form::label('name', 'Nombre de la entrada')}}
  {{Form::text('name', null, ['class' => 'form-control', 'id'=> 'name']) }}
</div>

<div class="form-group">
  {{Form::label('slug', 'URL de la entrada')}}
  {{Form::text('slug', null, ['class' => 'form-control', 'id'=> 'slug']) }}
</div>

<div class="form-group">

  {{Form::label('file', 'Imagen')}}
  {{Form::file('file', null, ['class' => 'form-control btn-danger']) }}

</div>

<div class="form-group">
  {{Form::label('status', 'Estado: ')}}
  <label class="ml-2">
  {{Form::radio('status', 'PUBLISHED') }} Publicado
  </label>

  <label class="ml-2">
  {{Form::radio('status', 'DRAFT') }} Borrador
  </label>
</div>

<div class="form-group">
  {{ Form::label('tags','Etiquetas') }}
  <div class="text-justify">
  @foreach($tags as $tag)
  <label>
    {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
  </label> 
  @endforeach
  </div>
</div>
<div class="form-group">
  {{Form::label('excerpt', 'Extracto')}}
  {{Form::textarea('excerpt', null, ['class' => 'form-control', 'rows'=> '2']) }}
</div>

<div class="form-group">
  {{Form::label('body', 'Descripción')}}
  {{Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>

@section('scripts') 
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

<script>
jQuery(document).ready(function(){
         $("#name").keyup(function(){
                var cadena = $(this).val();
                string_to_slug(cadena);
            });
});

function string_to_slug (str) {
         str = str.replace(/^\s+|\s+$/g, '');
         str = str.toLowerCase(); 
        
          //quita acentos, cambia la ñ por n, etc
          var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
          var to   = "aaaaeeeeiiiioooouuuunc------";
          
          for (var i=0, l=from.length ; i<l ; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
           }

           str = str.replace(/[^a-z0-9 -]/g, '') // quita caracteres invalidos
                 .replace(/\s+/g, '-') // reemplaza los espacios por -
                 .replace(/-+/g, '-'); // quita las plecas

           return $("#slug").val(str);
}﻿;

  CKEDITOR.config.height = 400;
  CKEDITOR.config.width = 'auto';

  CKEDITOR.replace('body'); 
</script>


@endsection