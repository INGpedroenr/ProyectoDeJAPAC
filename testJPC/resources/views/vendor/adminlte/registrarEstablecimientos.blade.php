@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Alta de Establecimientos</font></h1>
			<form action="{{url('/guardarestablecimientos')}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="nombre_establecimiento">Nombre del Establecimiento:</label>
					<input type="text" class="form-control" name="nombre_establecimiento" required>
				</div>
				<div class="form-group">
					<label for="razon_social">Razon Social:</label>
					<input type="text" class="form-control" name="razon_social" required>
				</div>
				<div class="form-group">
					<label for="rfc">RFC:</label>
					<input type="text" class="form-control" name="rfc" required>
				</div>
				<div class="form-group">
					<label for="actividad">Actividad:</label>
					<input type="text" class="form-control" name="actividad" required>
				</div>
				<div class="form-group">
					<label for="calle">Calle:</label>
					<input type="text" class="form-control" name="calle" required>
				</div>
				<div class="form-group">
					<label for="num_exterior">N° Exterior:</label>
					<input type="number" class="form-control" name="num_exterior" required>
				</div>
				<div class="form-group">
					<label for="num_interior">N° Interior</label>
					<input type="text" class="form-control" name="num_interior" required>
				</div>
				<div class="form-group">
					<label for="colonia">Colonia:</label>
					<input type="text" class="form-control" name="colonia" required>
				</div>
				<div class="form-group">
					<label for="codigo_postal">Codigo Postal:</label>
					<input type="number" class="form-control" name="codigo_postal" required>
				</div>
				<div class="form-group">
					<label for="telefono">Telofono:</label>
					<input type="number" class="form-control" name="telefono" required>
				</div>
				<div class="form-group">
					<label for="num_medidor">N° Medidor:</label>
					<input type="number" class="form-control" name="num_medidor" required>
				</div>
				<div class="form-group">
					<label for="cuenta">Cuenta:</label>
					<input type="number" class="form-control" name="cuenta" required>
				</div>
				<div class="form-group">
					<label for="correo_electronio">Correo Electronico:</label>
					<input type="text" class="form-control" name="email" required>
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Registrar</button>
					<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
				</div>
				</input>
			</form>
  		@endsection
	@endsection
