<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> PDF - Inventario del concejo Municipal </title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
	.box{
		width: 40px;
		height: 40px;		
		-webkit-transform: rotate(-90deg); 
		-moz-transform: rotate(-90deg);
		margin: 2px;
	}

	table,tr,td,th{
		text-align: center;
		font-size: 8px;
		border: black 0.5px solid;
		border-spacing: 0px;		
	}
	
	.membrete{
	 	text-align: center; 
	 	font-size: 12px; 
	 	color: #060062;
	 }

	.tituloDoc{
	 	text-align: center; 
	 	font-size: 8; 
	 	color: black;

	 }
	</style>
</head>
<body>												
	<p class="membrete">
	CONCEJO MUNICIPAL DEL MUNICIPIO CEDEÑO<br>
	Caicara de Maturín – Estado  Monagas<br>
	RIF: G-20009010-3<br>							
	</p>												
	<p class="tituloDoc">
	INVENTARIO DE BIENES MUEBLES DEL DEPARTAMENTO DE PRESIDENCIA,  ADMINISTRACION  Y RRHH
	</p>

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
			@foreach( $inventarios as $inventario)
			<tr>
				<td>{{$inventario->id}}</td>
				<td>{{ $inventario->articulo->dsc }}</td>
				<td>{{ $inventario->cantidad }}</td>
				<td><p class="box"><br> {{ $inventario->codigo }} </p> </td>
				<td><p class="box"><br> {{ $inventario->grupo->codigo }} </p></td>
				<td><p class="box"><br> {{ $inventario->independiente }} </p></td>
				<td width="50px">{{ $inventario->serial }} </td>
				<td width="60px">{{ $inventario->modelo }} </td>
				<td width="50px">{{ $inventario->marca->nombre }} </td>
				<td width="50px">{{ $inventario->color->nombre }} </td>
				<td>{{ $inventario->incorp }} Bs</td>
				<td>{{ $inventario->desincorp }} Bs</td>
				<td>{{ $inventario->observacion }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>