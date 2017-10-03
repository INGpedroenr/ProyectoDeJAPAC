@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Captura de Visitas de Inspeccion</font></h1>
			<form action="{{url('/guardarvisitainspeccion')}}/{{'$establecimientos->id'}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <!--Buscado de Establecimientos-->
            <div class="form-group">
                <label for="nombre_establecimiento">Seleccione el Establecimiento:</label>
								<input type="text" style="width : 450px; heigth : 450px"name="nombre_establecimiento" readonly>

								<td><a href="{{url('#')}}" class="btn btn-primary"><span>Buscar <span class="glyphicon glyphicon-search"></span></span></a></td>
								<td><a href="{{url('/registrarvisitainspeccion')}}" class="btn btn-success btn-xs" ><span>Detalles del Establecimiento</span></a></td>
								<td><a href="{{url('/registrarestablecimientos')}}" class="btn btn-success btn-xs" ><span>Alta del Establecimiento</span></a></td>
            </div>

      </input>
      </form>
        @endsection
    @endsection
