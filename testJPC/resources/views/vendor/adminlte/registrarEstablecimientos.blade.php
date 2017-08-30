@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Alta de Establecimientos</font></h1>
			<form action="{{url('/guardarestablecimientos')}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="nombre_establecimiento">Nombre del Establecimiento:</label>
					<input type="text" style="width : 250px; heigth : 250px" name="nombre_establecimiento" required>
                </div>
                <div class="form-group">
                    <label for="razon_social">Razon Social:</label>
					<input type="text" style="width : 350px; heigth : 350px" name="razon_social" required>
                </div>
				<div class="form-group">
                    <label for="rfc">RFC:</label>
					<input type="text" style="width : 400px; heigth : 400px" name="rfc" required>
                </div>
                <div class="form-group">
                    <label for="actividad">Actividad:</label>
					<input type="text" style="width : 360px; heigth : 360px" name="actividad" required>
				</div>
				<div class="form-group">
                    <label for="calle">Calle:</label>
					<input type="text" style="width : 200px; heigth : 200px" name="calle" required>

                    <label for="num_exterior">N° Exterior:</label>
					<input type="text" style="width : 70px; heigth : 70px" name="num_exterior">

                    <label for="num_interior">N° Interior</label>
					<input type="text" style="width : 70px; heigth : 70px" name="num_interior">
                </div>
				<div class="form-group">
                    <label for="colonia">Colonia:</label>
					<input type="text" style="width : 250px; heigth : 250px" name="colonia" required>

                    <label for="codigo_postal">Codigo Postal:</label>
					<input type="number" style="width : 100px; heigth : 100px" name="codigo_postal" required>

                    <label for="telefono">Telofono:</label>
					<input type="number" style="width : 100px; heigth : 100px" name="telefono">
				</div>
				<div class="form-group">
                    <label for="num_medidor">N° Medidor:</label>
					<input type="number" style="width : 70px; heigth : 70px" name="num_medidor">

                    <label for="cuenta">Cuenta:</label>
					<input type="number" style="width : 70px; heigth : 70px" name="cuenta" >

                    <label for="correo_electronio">Correo Electronico:</label>
					<input type="text" style="width : 200px; heigth : 200px" name="email" required>
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Registrar</button>
					<a href="{{url('/establecimientos')}}" class="btn btn-danger">Cancelar</a>
				</div>
				</input>
			</form>
  		@endsection
	@endsection
