<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Inspecciones Informales</title>
	<style>
		.encabezado{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
<img src="img/japacLogo.png" width="150px" alt="">
	<h1 class="encabezado">Lista de Infracciones</h1>
	<hr>
	@foreach($i_informales as $ii)
		{{$ii->nombre_establecimiento}} <br>
	@endforeach
</body>
</html>
