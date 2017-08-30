@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
            <h1><font color="negro">Inspecciones Informales o Infracciones</font></h1>
            <td><a href="{{url('/registrarinspeccionesinformales')}}" class="btn btn-success btn-xs"><span>Capturar Infracciones</span></a></td>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th><font color="negro">ID</font></th>
                    <th><font color="negro">N° de Infraccion</font></th>
                    <th><font color="negro">Establecimiento</font></th>
                    <th><font color="negro">Actividad</font></th>
                    <th><font color="negro">Fecha de la Infraccion</font></th>
                    <th><font color="negro">N° Inspector</font></th>
                    <th><font color="negro">Nombre del Inspector</font></th>
                    <th><a href="{{url('/pdfinspeccionesinformales')}}" class="btn btn-success btn-xs"><span>PDF</span></a></th>
                </tr>
                @foreach($i_informales as $i)
					<tr>
						<td>{{$i->id}}</td>
						<td>{{$i->num_infraccion}}</td>
						<td>{{$i->nombre_establecimiento}}</td>
						<td>{{$i->actividad}}</td>
						<td>{{$i->fecha_inspeccion_informal}}</td>
						<td>{{$i->num_inspector}}</td>
						<td>{{$i->nombre_inspector}}</td>
						<td>
						<a href="{{url('/editarinspeccionesinformales')}}/{{$i->id}}" class="btn btn-primary btn-xs">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						<a href="{{url('/eliminarinspeccionesinformales')}}/{{$i->id}}" class="btn btn-danger btn-xs">
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
