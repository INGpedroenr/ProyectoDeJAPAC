@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Editar de Inicio Procedimiento</font></h1>
			<form action="{{url('/actualizarinicioprocedimiento')}}/{{$i_procedimiento->id}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <!--Despliege de los datos solicitados-->
            <div class="form-group">
        		<label for="razon_social">Razon Social:</label>

                <label for="actividad">Actividad:</label>
            </div>
            <div class="form-group">
        		<label for="rfc">RFC:</label>

                <label for="email">Correo Electronico:</label>
        	</div>
            <div class="form-group">
        		<label for="calle">Calle:</label>

                <label for="num_exterior">N° Exterior:</label>

                <label for="num_interior">N° Interior:</label>
        	</div>
            <div class="form-group">
                <label for="colonia">Colonia:</label>

                <label for="codigo_postal">Codigo Postal:</label>
                </div>
            <div class="form-group">
        		<label for="num_medidor">N° de Medidor:</label>

                <label for="cuenta">Cuenta:</label>
        	</div>
            <div class="form-group">
                <label for="descargas">Cantidad de Descargas:</label>
            </div>

            <div class="table table-striped">
                <label for="limitesPermisibles">Limistes Permisibles (NOM-002-SERMARNAT-1996)</label><br>
                <tr>
                    <th>DBO->150 <input type="number"  style="width : 80px; heigth : 80px" name="dbo" required></th><br>
                    <th>GyA->50 <input type="number"  style="width : 80px; heigth : 80px" name="gya" required></th><br>
                    <th>SST->150 <input type="number"  style="width : 80px; heigth : 80px" name="sst" required></th><br>
                </tr>
            </div>
            <div class="form-group">
                <label for="inicioProcedimiento"><font color="negro">Inicio de Procedimiento</font></label><br>

                <label for="num_oficioIP">N° de Oficio:</label>
                <input type="text" style="width : 150px; heigth : 150px" name="num_oficioIP">

                <label for="fecha_elaboracion">Fecha de Elaboracion:</label>
                <input type="datetime-local" style="width : 200px; heigth : 200px" name="fecha_elaboracion"> <span class="glyphicon glyphicon-calendar"></span>

                <label for="fecha_recibidoIP">Fecha de Recibido por la Empresa:</label>
                <input type="datetime-local" style="width : 200px; heigth : 200px" name="fecha_recibidoIP"> <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <div>
        		<button type="submit" class="btn btn-primary">Actualizar</button>
        		<a href="{{url('/inicioprocedimiento')}}" class="btn btn-danger">Cancelar</a>
        	</div>
            </input>
            </form>
            @endsection
    @endsection
