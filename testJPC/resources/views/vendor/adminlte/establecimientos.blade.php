@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
			<h1><font color="negro">Establecimientos</font></h1>
			<td><a href="{{url('/registrarestablecimientos')}}" class="btn btn-success btn-xs"><span>Agregar Establecimiento</span></a></td>
			<table class="table table-striped">
				<thead>
				<tr>
					<th><font color="negro">ID</font></th>
					<th><font color="negro">Establecimiento</font></th>
					<th><font color="negro">Razon Social</font></th>
					<th><font color="negro">RFC</font></th>
					<th><font color="negro">Actividad</font></th>
					<th><font color="negro">Calle</font></th>
					<th><font color="negro">N° Exterior</font></th>
					<th><a href="{{url('/pdfestablecimientos')}}" class="btn btn-success btn-xs"><span>PDF</span></a></th>
				</tr>
				@foreach($establecimientos as $e)
					<tr>
						<td>{{$e->id}}</td>
						<td>{{$e->nombre_establecimiento}}</td>
						<td>{{$e->razon_social}}</td>
						<td>{{$e->rfc}}</td>
						<td>{{$e->actividad}}</td>
						<td>{{$e->calle}}</td>
						<td>{{$e->num_exterior}}</td>
						<td>
						<a href="{{url('/editarestablecimientos')}}/{{$e->id}}" class="btn btn-primary btn-xs">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						<a href="{{url('/eliminarestablecimientos')}}/{{$e->id}}" class="btn btn-danger btn-xs">
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
