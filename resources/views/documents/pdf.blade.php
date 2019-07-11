<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> PDF - Inventario del concejo Municipal </title>
	<style type="text/css" media="screen">
		.box{
			font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; 
			width: 40px;
			height: 40px;		
			-webkit-transform: rotate(-90deg); 
			-moz-transform: rotate(-90deg);
			margin: 2px;
		}

		table,tr,td,th{
			font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; 
			text-align: center;
			font-size: 8px;
			border: black 0.5px solid;
			border-spacing: 0px;		
		}

		.logo{
		 	width: 80px;
		 	height: 80px;
		 	float:left;
		 	margin-left: 20px;
		 	margin-top: -10px; 
		}

		.container{
			margin-left:-120px;
		}
		
		.membrete{
			font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; 
			font-family: Calibri, Arial, sans-serif;	
		 	text-align: center; 
		 	font-size: 12px; 
		 	color: #060062;
		}

		.tituloDoc{
			font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif; 
			font-family: Calibri, Arial, sans-serif;
		 	text-align: center; 
		 	font-size: 8px; 
		 	color: black;
		}
		.page-break {
		    page-break-after: always;
		}
	</style>
</head>
<body>
	<div class="page-break">
		<img src="image/logo_abmc325.png" class="logo">										
		<div class="container">
			<p class="membrete"><b>	CONCEJO MUNICIPAL DEL MUNICIPIO CEDEÑO<br>Caicara de Maturín – Estado  Monagas<br>RIF: G-20009010-3<br></b></p>												
			<p class="tituloDoc"><b>INVENTARIO DE BIENES MUEBLES DEL DEPARTAMENTO DE PRESIDENCIA,  ADMINISTRACION  Y RRHH</b></p>
		</div>

		<table>
			<thead>
				<tr>
					<th> N° </th>
					<th>DESCRIPCIÓN</th>
					<th>CANTD.</th>
					<th><p class="box"><br><br> CÓDIGO</p></th>
					<th><p class="box"><br><br> GRUPO</p></th>
					<th><p class="box"><br> Nº INDENTIF.</p></th>
					<th width="50px">SERIAL</th>
					<th width="60px">MODELO</th>
					<th width="50px">MARCA</th>
					<th width="50px">COLOR</th>
					<th>INCORPORACIÓN Bs.</th>				
					<th>DESINCORPORACIÓN Bs.</th>
					<th>OBSERVACION</th>
				</tr>
			</thead>
			<tbody>
				{{$i=1}}
				@foreach( $inventarios as $inventario)
				@if( $inventario->departamento_id == 1)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ $inventario->articulo->dsc }}</td>
					<td>{{ $inventario->cantidad }}</td>
					<td><p class="box"><br> {{ $inventario->codigo }} </p> </td>
					<td><p class="box"><br> {{ $inventario->grupo->codigo."-0000" }} </p></td>
					<td><p class="box"><br> {{ $inventario->independiente }} </p></td>
					<td width="50px">{{ $inventario->serial }} </td>
					<td width="60px">{{ $inventario->modelo }} </td>
					<td width="50px">{{ $inventario->marca->nombre }} </td>
					<td width="50px">{{ $inventario->color->nombre }} </td>
					<td>{{ $inventario->incorp }} Bs</td>
					<td>{{ $inventario->desincorp }} Bs</td>
					<td>{{ $inventario->observacion }} </td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="page-break">
		<img src="image/logo_abmc325.png" class="logo">										
		<div class="container">
			<p class="membrete"><b>	CONCEJO MUNICIPAL DEL MUNICIPIO CEDEÑO<br>Caicara de Maturín – Estado  Monagas<br>RIF: G-20009010-3<br></b></p>												
			<p class="tituloDoc"><b>INVENTARIO DE BIENES MUEBLES DE LA SALA DE SESIONES</b></p>
		</div>

		<table>
			<thead>
				<tr>
					<th> N° </th>
					<th>DESCRIPCIÓN</th>
					<th>CANTD.</th>
					<th><p class="box"><br><br> CÓDIGO</p></th>
					<th><p class="box"><br><br> GRUPO</p></th>
					<th><p class="box"><br> Nº INDENTIF.</p></th>
					<th width="50px">SERIAL</th>
					<th width="60px">MODELO</th>
					<th width="50px">MARCA</th>
					<th width="50px">COLOR</th>
					<th>INCORPORACIÓN Bs.</th>				
					<th>DESINCORPORACIÓN Bs.</th>
					<th>OBSERVACION</th>
				</tr>
			</thead>
			<tbody>
				{{$i=1}}
				@foreach( $inventarios as $inventario)
				@if( $inventario->departamento_id == 2)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ $inventario->articulo->dsc }}</td>
					<td>{{ $inventario->cantidad }}</td>
					<td><p class="box"><br> {{ $inventario->codigo }} </p> </td>
					<td><p class="box"><br> {{ $inventario->grupo->codigo."-0000" }} </p></td>
					<td><p class="box"><br> {{ $inventario->independiente }} </p></td>
					<td width="50px">{{ $inventario->serial }} </td>
					<td width="60px">{{ $inventario->modelo }} </td>
					<td width="50px">{{ $inventario->marca->nombre }} </td>
					<td width="50px">{{ $inventario->color->nombre }} </td>
					<td>{{ $inventario->incorp }} Bs</td>
					<td>{{ $inventario->desincorp }} Bs</td>
					<td>{{ $inventario->observacion }} </td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="page-break">
		<img src="image/logo_abmc325.png" class="logo">										
		<div class="container">
			<p class="membrete"><b>	CONCEJO MUNICIPAL DEL MUNICIPIO CEDEÑO<br>Caicara de Maturín – Estado  Monagas<br>RIF: G-20009010-3<br></b></p>												
			<p class="tituloDoc"><b>INVENTARIO DE BIENES MUEBLES DE LA OFICINA DE SECRETARIA DE CAMARA Y OFICINA DE JEFE DE ATENCION AL CIUDADANO</b></p>
		</div>

		<table>
			<thead>
				<tr>
					<th> N° </th>
					<th>DESCRIPCIÓN</th>
					<th>CANTD.</th>
					<th><p class="box"><br><br> CÓDIGO</p></th>
					<th><p class="box"><br><br> GRUPO</p></th>
					<th><p class="box"><br> Nº INDENTIF.</p></th>
					<th width="50px">SERIAL</th>
					<th width="60px">MODELO</th>
					<th width="50px">MARCA</th>
					<th width="50px">COLOR</th>
					<th>INCORPORACIÓN Bs.</th>				
					<th>DESINCORPORACIÓN Bs.</th>
					<th>OBSERVACION</th>
				</tr>
			</thead>
			<tbody>
				{{$i=1}}
				@foreach( $inventarios as $inventario)
				@if( $inventario->departamento_id == 3)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ $inventario->articulo->dsc }}</td>
					<td>{{ $inventario->cantidad }}</td>
					<td><p class="box"><br> {{ $inventario->codigo }} </p> </td>
					<td><p class="box"><br> {{ $inventario->grupo->codigo."-0000" }} </p></td>
					<td><p class="box"><br> {{ $inventario->independiente }} </p></td>
					<td width="50px">{{ $inventario->serial }} </td>
					<td width="60px">{{ $inventario->modelo }} </td>
					<td width="50px">{{ $inventario->marca->nombre }} </td>
					<td width="50px">{{ $inventario->color->nombre }} </td>
					<td>{{ $inventario->incorp }} Bs</td>
					<td>{{ $inventario->desincorp }} Bs</td>
					<td>{{ $inventario->observacion }} </td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>