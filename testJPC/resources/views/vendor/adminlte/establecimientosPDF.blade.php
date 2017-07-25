<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Establecimientos</title>
	<style>
		.encabezado{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
<img src="img/logo.png" width="150px" alt="">
	<h1 class="encabezado">Lista de Establecimientos</h1>
	<hr>
	@foreach($establecimientos as $e)
		{{$e->establecimientos}} <br>
	@endforeach
</body>
</html>