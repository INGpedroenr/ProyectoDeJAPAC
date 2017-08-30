@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
        <h1><font color="negro">Captura de Inspecciones Informales</font></h1>
			<form action="{{url('/actualizarinspeccionesinformales')}}/{{$i_informales->id}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="fecha_inspeccion_informal">Fecha y Hora de la Infraccion:</label>
					<input type="datetime-local" style="width : 250px; heigth : 250px" name="fecha_inspeccion_informal" value="{{$i_informales->fecha_inspeccion_informal}}">
				</div>
				<div class="form-group">
					<label for="num_infraccion">Numero de Infraccion:</label>
					<input type="text" style="width : 150px; heigth : 150px" name="num_infraccion" required value="{{$i_informales->num_infraccion}}">

					<label for="nombre_establecimiento">Nombre del Establecimiento:</label>
					<input type="text" style="width : 350px; heigth : 350px" name="nombre_establecimiento" required value="{{$i_informales->nombre_establecimiento}}">

					<label for="actividad">Actividad:</label>
					<input type="text" style="width : 100px; heigth : 100px" name="actividad" required value="{{$i_informales->actividad}}">
				</div>
				<div class="form-group">
					<h3><font color=negro>Domicilio</font></h3>
					<label for="calle">Calle:</label>
					<input type="text" style="width : 350px; heigth : 350px" name="calle" required value="{{$i_informales->calle}}">

					<label for="num_exterior">N° Exterior:</label>
					<input type="text" style="width : 80px; heigth : 80px" name="num_exterior" value="{{$i_informales->num_exterior}}">

					<label for="num_interior">N° Interior</label>
					<input type="text" style="width : 80px; heigth : 80px" name="num_interior" value="{{$i_informales->num_interior}}">
				</div>
				<div class="form-group">
					<label for="colonia">Colonia:</label>
					<input type="text" style="width : 350px; heigth : 350px" name="colonia" required value="{{$i_informales->colonia}}">

					<label for="codigo_postal">Codigo Postal:</label>
					<input type="text" style="width : 100px; heigth : 100px" name="codigo_postal" value="{{$i_informales->codigo_postal}}">
				</div>
        <div class="form-group">
					<label for="num_medidor">N° Medidor:</label>
					<input type="text" style="width : 80px; heigth : 80px" name="num_medidor" value="{{$i_informales->num_medidor}}">

					<label for="cuenta">Cuenta:</label>
					<input type="text" style="width : 80px; heigth : 80px" name="cuenta" value="{{$i_informales->cuenta}}">
				</div>
				<div class="form-group">
					<label for="señas_particulares">Señas Particulares</label>
					<input type="text" style="width : 150px; heigth : 150px" name="señas_particulares" required value="{{$i_informales->señas_particulares}}">
				</div>
				<div class="form-group">
					<label for="num_inspector">Numero del Inspector:</label>
					<input type="text" style="width : 80px; heigth : 80px" name="num_inspector" required value="{{$i_informales->num_inspector}}">

					<label for="nombre_inspector">Nombre del Inpsector:</label>
					<input type="text" style="width : 300px; heigth : 300px" name="nombre_inspector" required value="{{$i_informales->nombre_inspector}}">
				</div>
        <div class="form-group">
        		<label for="motivo_infraccion">Se infraciono por:</label>
            		<select name="motivo_infraccion" style="width : 350px; heigth : 350px">
                  	@if($i_informales->motivo_infraccion==0)
                        <option value="0" selected>-------</option>
                        <option value="1">Descargar aguas residuales sin permiso.</option>
            						<option value="2">Descargar grasas y aceites al drenaje sanitario.</option>
                        <option value="3">Descargar residuos toxicos o prohibidos al drenaje sanitario</option>
            						<option value="4">Descargar aguas pluviales al drenaje sanitario.</option>
                        <option value="5">No cuenta con registro de banqueta.</option>
                        @elseif($i_informales->motivo_infraccion==1)
                        <option value="0">-------</option>
                        <option value="1" selected>Descargar aguas residuales sin permiso.</option>
            						<option value="2">Descargar grasas y aceites al drenaje sanitario.</option>
                        <option value="3">Descargar residuos toxicos o prohibidos al drenaje sanitario</option>
            						<option value="4">Descargar aguas pluviales al drenaje sanitario.</option>
                        <option value="5">No cuenta con registro de banqueta.</option>
                        @elseif($i_informales->motivo_infraccion==2)
                        <option value="0">-------</option>
                        <option value="1">Descargar aguas residuales sin permiso.</option>
            						<option value="2" selected>Descargar grasas y aceites al drenaje sanitario.</option>
                        <option value="3">Descargar residuos toxicos o prohibidos al drenaje sanitario</option>
            						<option value="4">Descargar aguas pluviales al drenaje sanitario.</option>
                        <option value="5">No cuenta con registro de banqueta.</option>
                        @elseif($i_informales->motivo_infraccion==3)
                        <option value="0">-------</option>
                        <option value="1">Descargar aguas residuales sin permiso.</option>
            						<option value="2">Descargar grasas y aceites al drenaje sanitario.</option>
                        <option value="3" selected>Descargar residuos toxicos o prohibidos al drenaje sanitario</option>
            						<option value="4">Descargar aguas pluviales al drenaje sanitario.</option>
                        <option value="5">No cuenta con registro de banqueta.</option>
                        @ifelse($i_informales->motivo_infraccion==4)
                        <option value="0">-------</option>
                        <option value="1">Descargar aguas residuales sin permiso.</option>
            						<option value="2">Descargar grasas y aceites al drenaje sanitario.</option>
                        <option value="3">Descargar residuos toxicos o prohibidos al drenaje sanitario</option>
            						<option value="4" selected>Descargar aguas pluviales al drenaje sanitario.</option>
                        <option value="5">No cuenta con registro de banqueta.</option>
                        @else
                        <option value="0" >-------</option>
                        <option value="1">Descargar aguas residuales sin permiso.</option>
            						<option value="2">Descargar grasas y aceites al drenaje sanitario.</option>
                        <option value="3">Descargar residuos toxicos o prohibidos al drenaje sanitario</option>
            						<option value="4">Descargar aguas pluviales al drenaje sanitario.</option>
                        <option value="5" selected>No cuenta con registro de banqueta.</option>
                        @endif
            		</select>
                </div>
        <div class="form-group">
					<label for="observaciones">Observaciones:</label>
					<textarea name="observaciones" rows="4" cols="180" value="{{$i_informales->observaciones}}"></textarea>
				</div>
        <div class="form-group">
					<label for="elaboro">Elaboro:</label>
					<input type="text" style="width : 350px; heigth : 350px" name="elaboro" required value="{{$i_informales->elaboro}}">
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Actualizar</button>
					<a href="{{url('/inspeccionesinformales')}}" class="btn btn-danger">Cancelar</a>
				</div>
				</input>
			</form>
  		@endsection
	@endsection
