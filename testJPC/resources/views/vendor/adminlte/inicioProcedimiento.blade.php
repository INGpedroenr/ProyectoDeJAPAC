@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
			<h1><font color="negro">Inicios de Procedimientos</font></h1>
			<td><a href="{{url('/registrarinicioprocedimiento')}}" class="btn btn-success btn-xs"><span>Agregar Inicio de Procedimiento</span></a></td>
			<table class="table table-striped">
				<thead>
				<tr>
					<th><font color="negro">Num. de V.I.</font></th>
					<th><font color="negro">Razon Social</font></th>
                    <th><font color="negro">Actividad</font></th>
					<th><font color="negro">Domicilio</font></th>
					<th><font color="negro">Num. de Oficio I.P.</font></th>
					<th><a href="{{url('/pdfinicioprocedimiento')}}" class="btn btn-success btn-xs"><span>PDF</span></a></th>
				</tr>

				</thead>
			</table>
			<div class="text-center">

			</div>
				<script type="text/javascript">
            		setTimeout(function() {
                		$(".alert").fadeOut(1500);
            		},1500);
				</script>

		@endsection

	@endsection
