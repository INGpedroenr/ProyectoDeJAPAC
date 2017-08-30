@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Editar Establecimientos</font></h1>
			<form action="{{url('/actualizarestablecimientos')}}/{{$establecimientos->id}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
                    <label for="nombre_establecimiento">Nombre del Establecimiento:</label>
					<input type="text" style="width : 250px; heigth : 250px" name="nombre_establecimiento" required value="{{$establecimientos->nombre_establecimiento}}">
				</div>
				<div class="form-group">
                    <label for="razon_social">Razon Social:</label>
					<input type="text" style="width : 350px; heigth : 350px" name="razon_social" required value="{{$establecimientos->razon_social}}">
				</div>
				<div class="form-group">
                    <label for="rfc">RFC:</label>
					<input type="text" style="width : 400px; heigth : 400px" name="rfc" required value="{{$establecimientos->rfc}}">
				</div>
				<div class="form-group">
                    <label for="actividad">Actividad:</label>
					<input type="text" style="width : 360px; heigth : 360px" name="actividad" required value="{{$establecimientos->actividad}}">
				</div>
				<div class="form-group">
                    <label for="calle">Calle:</label>
					<input type="text" style="width : 200px; heigth : 200px" name="calle" required value="{{$establecimientos->calle}}">

                    <label for="num_exterior">N° Exterior:</label>
					<input type="text" style="width : 70px; heigth : 70px" name="num_exterior" required value="{{$establecimientos->num_exterior}}">

                    <label for="num_interior">N° Interior</label>
					<input type="text" style="width : 70px; heigth : 70px" name="num_interior"value="{{$establecimientos->num_exterior}}">
				</div>
				<div class="form-group">
                    <label for="colonia">Colonia:</label>
					<input type="text" style="width : 250px; heigth : 250px" name="colonia" required value="{{$establecimientos->colonia}}">

                    <label for="codigo_postal">Codigo Postal:</label>
					<input type="number" style="width : 100px; heigth : 100px" name="codigo_postal" required value="{{$establecimientos->codigo_postal}}">

                    <label for="telefono">Telofono:</label>
					<input type="number" style="width : 100px; heigth : 100px" name="telefono" required value="{{$establecimientos->telefono}}">
				</div>
				<div class="form-group">
                    <label for="num_medidor">N° Medidor:</label>
					<input type="number" style="width : 100px; heigth : 100px" name="num_medidor" value="{{$establecimientos->num_medidor}}">

                    <label for="cuenta">Cuenta:</label>
					<input type="number" style="width : 100px; heigth : 100px" name="cuenta" value="{{$establecimientos->cuenta}}">

                    <label for="correo_electronio">Correo Electronico:</label>
					<input type="text" style="width : 200px; heigth : 200px" name="email" required value="{{$establecimientos->email}}">
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Actualizar</button>
					<a href="{{url('/establecimientos')}}" class="btn btn-danger">Cancelar</a>
				</div>
				</input>
			</form>
  		@endsection
	@endsection
