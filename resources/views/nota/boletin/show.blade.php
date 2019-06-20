<!DOCTYPE html>
<html>
<head>
	<title>Planilla Estudiantil</title>
	<style type="text/css" media="all">
		body 
		{
			font-family: arial;
			background-image: url({{ asset('img/4.png') }});
		}
		.table--show
		{
			margin: auto;
			width: 100%;
		}
		.content
		{
			background-color: #fff;
			width: 79%;
			margin: 110px auto;
			border-radius: 8px 8px;
			padding: 11px;
		}
		.table--show td
		{
			text-transform: uppercase;
		}
		.td-title
		{
			font-weight: bold;
		}
		.table--show tbody .margin-lapso
		{
			margin-right: 18px;
			text-transform: capitalize;
			font-weight: bold;
		}
		.th-header-title
		{
			text-align: center;
			text-transform: uppercase;
			background-color: #2F3292;
			color:#fff;
		}
	</style>
</head>
<body>
<div class="content">
<table class="table--show">
		<thead class="table--head">
			<tr>
				<th colspan="4"	class="th-header-title">Datos del Instituto</th>
			</tr>
		</thead>
		<tbody class="table--body">
			<tr>
				<td colspan="1" class="td-title">Sector:</td>
				<td colspan="1">FINAL DEL BARRIO RUIZ PINEDA. FRENTE AVENIDA PRINCIPAL RUIZ PINEDA. IZQUIERDA CALLE 6 DEL PORTUARIO 1. DERECHA CALLE LA INVASION. REFERENCIA FRENTE A LA PLAZA DE RUIZ PINEDA</td>
				<td colspan="1" class="td-title">Nombre:</td>
				<td colspan="1"> UNIDAD EDUCATIVA  JOSE ANTONIO MAITIN</td>
			</tr>
			<tr>
				<td colspan="1" class="td-title">Municipio:</td>
				<td colspan="1">  PUERTO CABELLO</td>
				<td colspan="1" class="td-title">Parroquia:</td>
				<td colspan="1">  JUAN JOSE FLORES</td>
			</tr>
		</tbody>
</table>
<br>
<table class="table--show">
		<thead class="table--head">
			<tr>
				<th colspan="4"	class="th-header-title">Datos del alumno</th>
			</tr>
		</thead>
		<tbody class="table--body">
			<tr>
				<td colspan="1" class="td-title">Nombre y apellidos:</td>
				<td colspan="1">{{ $nota->alumno->nombre }}</td>
				<td colspan="1" class="td-title">Cedula:</td>
				<td colspan="1">{{ $nota->alumno->cedula }}</td>
			</tr>
			<tr>
				<td colspan="1" class="td-title">Año y sección: </td>
				<td colspan="1">
			        @if($nota->alumno->grado == 1)
			          1 Año
			        @elseif($nota->alumno->grado == 2)
			          2 Año
			        @elseif($nota->alumno->grado == 3)
			          3 Año
			        @elseif($nota->alumno->grado == 4)
			          4 Año
			        @elseif($nota->alumno->grado == 5)
			          5 Año
			        @endif
			        {{ $nota->alumno->seccion }}
				</td>
				<td colspan="1" class="td-title">Telefonos: </td>
				<td colspan="1">{{ $nota->alumno->telefonos }}</td>
			</tr>
		</tbody>
</table>
<br>
<table class="table--show">
	<thead>
		<tr>
			<th colspan="10" class="th-header-title">Boletín</th>
		</tr>
		<tr>
		<th>Lapso</th>
		@foreach($nota->boletin['I'] as $materia)
			<th>{{ $materia['materia'] }}</th>
		@endforeach
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="margin-lapso">Primero</td>
		@foreach($nota->boletin['I'] as $lapso)
			<td>{{ $lapso['nota'] }}</td>
		@endforeach
		</tr>
		<tr>
			<td class="margin-lapso">Segundo</td>
		@foreach($nota->boletin['II'] as $lapso)
			<td>{{ $lapso['nota'] }}</td>
		@endforeach
		</tr>
		<tr>
			<td class="margin-lapso">Tercero</td>
		@foreach($nota->boletin['III'] as $lapso)
			<td>{{ $lapso['nota'] }}</td>
		@endforeach
		</tr>
	</tbody>
</table>	
</div>	
</body>
</html>