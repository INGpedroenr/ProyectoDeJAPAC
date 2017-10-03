@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
			<h1><font color="negro">Visitas de Inspeccion</font></h1>
			<td><a href="{{url('/seleccionarestablecimiento')}}" class="btn btn-success btn-xs"><span>Capturar Visita de Inspeccion</span></a></td>
			<table class="table table-striped">
				<thead>
				<tr>
					<th><font color="negro">N° V.I.</font></th>
					<th><font color="negro">Fecha de V.I.</font></th>
					<th><font color="negro">N° de Oficio</font></th>
					<th><font color="negro">Actividad</font></th>
					<th><font color="negro">Razon Social</font></th>
					<th><font color="negro">Calle</font></th>
					<th><a href="{{url('/pdfvisitainspeccion')}}" class="btn btn-success btn-xs"><span>PDF</span></a></th>
				</tr>
                @foreach($v_inspeccion as $v)
                <tr>
                    <td>{{$v->numv_inspeccion}}</td>
                    <td>{{$v->fechaemision_permiso}}</td>
                    <td>{{$v->num_oficioVI}}</td>
                    <td>{{$v->razon_social}}</td>
                    <td>{{$v->actividad}}</td>
                    <td>{{$v->calle}}</td>
                    <td>
                    <a href="{{url('/editarvisitainspeccion')}}/{{$v->id}}" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a href="{{url('/eliminarvisitainspeccion')}}/{{$v->id}}" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                    </td>
                </tr>
                @endforeach
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
