<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Visita de Inspeccion</title>
	<style>
		.encabezado{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
<img src="img/japacLogo.png" width="150px" alt="">
	<h1 class="encabezado">Lista de Visitas de Inspeccion</h1>
    <div class="text-center">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><font color="negro">N° V.I.</font></th>
            <th><font color="negro">Fecha de V.I.</font></th>
            <th><font color="negro">N° de Oficio</font></th>
            <th><font color="negro">Actividad</font></th>
            <th><font color="negro">Razon Social</font></th>
            <th><font color="negro">Calle</font></th>
        </tr>
            @foreach($v_inspeccion as $v)
            <tr>
                <td>{{$v->numv_inspeccion}}</td>
                <td>{{$v->fechaemision_permiso}}</td>
                <td>{{$v->num_oficioVI}}</td>
                <td>{{$v->razon_social}}</td>
                <td>{{$v->actividad}}</td>
                <td>{{$v->calle}}</td>
            </tr>
            @endforeach    
        </thead>
    </table
    <div class="text-center">

    </div>
        <script type="text/javascript">
            setTimeout(function() {
                $(".alert").fadeOut(1500);
            },1500);
        </script>
</body>
</html>
