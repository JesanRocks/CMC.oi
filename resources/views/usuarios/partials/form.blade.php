<div class="form-group">
	{{Form::label('name', 'Nombre del Usuario')}}
	{{Form::text('name', null, ['class' => 'form-control', 'id'=> 'name']) }}
</div>

<div class="form-group">
	{{Form::label('email', 'Correo')}}
	{{Form::text('email', null, ['class' => 'form-control', 'id'=> 'email']) }}
</div>

<div class="form-group">
	{{Form::label('password', 'Contraseña')}}
	{{ Form::password('password', array('class'=>'form-control','id'=>'password') ) }}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
</div>

{{-- {{$clave = $usuario->password}}

	<input  class='form-control' type="password" name="password"  id="password" value="{{$usuario->password}}" placeholder=""> --}}