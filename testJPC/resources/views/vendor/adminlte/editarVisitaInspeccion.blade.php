@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Editar Visita de Inspeccion</font></h1>
			<form action="{{url('/actualizarvisitainspeccion')}}/{{$v_inspeccion->id}}" method="POST">
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <!--Datos de Establecimientos-->
            <div class="form-group">
        		<label for="razon_social">Razon Social:</label>
        		<select name="razon_social" style="width : 200px; heigth : 200px">
                    <option  value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->razon_social}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->razon_social}}</option>
                    @endforeach
                </select>
                <label for="actividad">Actividad:</label>
                <select name="actividad" style="width : 150px; heigth : 150px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->actividad}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->actividad}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="rfc">RFC:</label>
                <select name="rfc" style="width : 150px; heigth : 150px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->rfc}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->rfc}}</option>
                    @endforeach
                </select>
                <label for="email">Correo Electronico:</label>
                <select name=email style="width : 200px; heigth : 200px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->email}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->email}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <h3><font color="negro">Domicilio</font></h3>
                <label for="calle">Calle:</label>
                <select name=calle style="width : 200px; heigth : 200px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->calle}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->calle}}</option>
                    @endforeach
                </select>

                <label for="num_exterior">N° Exterior:</label>
                <select name="num_exterior" style="width : 70px; heigth : 70px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->num_exterior}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->num_exterior}}</option>
                    @endforeach
                </select>
                <label for="num_interior">N° Interior:</label>
                <select name="num_interior" style="width : 70px; heigth : 70px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->num_interior}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->num_interior}}</option>
                    @endforeach
                </select>
    	     </div>
             <div class="form-group">
                 <label for="colonia">Colonia:</label>
                 <select name="colonia" style="width : 200px; heigth : 200px">
                     <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->colonia}}</option>
                     @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->colonia}}</option>
                     @endforeach
                 </select>

                 <label for="codigo_postal">Codigo Postal:</label>
                 <select name="codigo_postal" style="width : 70px; heigth : 70px">
                     <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->codigo_postal}}</option>
                     @foreach($establecimientos as $e)
                         <option value="{{$e->id}}">{{$e->codigo_postal}}</option>
                     @endforeach
                 </select>
             </div>
             <div class="form-group">
                <label for="num_medidor">N° de Medidor:</label>
                <select name=num_medidor style="width : 70px; heigth : 70px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->num_medidor}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->num_medidor}}</option>
                    @endforeach
                </select>

                <label for="cuenta">Cuenta:</label>
                <select name=cuenta style="width : 70px; heigth : 70px">
                    <option value="{{$v_inspeccion->establecimientos_id}}">{{$v_inspeccion->cuenta}}</option>
                    @foreach($establecimientos as $e)
                        <option value="{{$e->id}}">{{$e->cuenta}}</option>
                    @endforeach
                </select>
        	 </div>
             <!--Datos de Visita de Inspeccion-->
             <div class="form-group">
                 <h3><font color="negro">Visita de Inspeccion</font></h3>
        		<label for="numv_inspeccion">N° V.I.:</label>
        		<input type="text" style="width : 100px; heigth : 100px" name="numv_inspeccion" required value="{{$v_inspeccion->numv_inspeccion}}">

                <label for="fechav_inspeccion">Fecha de Visita de Inspeccion:</label>
                <input type="datetime-local" style="width : 200px; heigth : 200px" name="fechav_inspeccion" required value="{{$v_inspeccion->fechav_inspeccion}}"> <span class="glyphicon glyphicon-calendar"></span>
        	 </div>
             <div class="form-group">
        		<label for="num_oficioVI">N° Oficio V.I.:</label>
        		<input type="text" name="num_oficioVI" required value="{{$v_inspeccion->num_oficioVI}}">

                <label for="descarga">Descargas:</label>
        		<input type="number" style="width : 50px; heigth : 50px" name="descarga" value="{{$v_inspeccion->descarga}}">
        	 </div>
             <div class="form-group">
                <label for="trampa">Trampa:</label>
                <select name="trampa" style="width : 250px; heigth : 2500px">
                    @if($v_inspeccion->trampa==0)
                    <option value="0" selected>-------</option>
                    <option value="1">de Grasas y Aceites.</option>
                    <option value="2">de Solidos Suspendidos Totales.</option>
                    <option value="3">Dos Trampas</option>
                    @elseif($v_inspeccion->trampa==1)
                    <option value="0">-------</option>
                    <option value="1" selected>de Grasas y Aceites.</option>
                    <option value="2">de Solidos Suspendidos Totales.</option>
                    <option value="3">Dos Trampas</option>
                    @elseif($v_inspeccion->trampa==2)
                    <option value="0">-------</option>
                    <option value="1">de Grasas y Aceites.</option>
                    <option value="2" selected>de Solidos Suspendidos Totales.</option>
                    <option value="3">Dos Trampas</option>
                    @else
                    <option value="0">-------</option>
                    <option value="1">de Grasas y Aceites.</option>
                    <option value="2">de Solidos Suspendidos Totales.</option>
                    <option value="3" selected>Dos Trampas</option>
                    @endif
                </select>
             </div>
             <div class="form-group">
        		<label for="num_permiso">N° de Permiso:</label>
        		<input type="text" name="num_permiso" value="{{$v_inspeccion->num_permiso}}">

                <label for="fechaemision_permiso">Fecha de Emision del Permiso:</label>
        		<input type="datetime-local" style="width : 200px; heigth : 200px" name="fechaemision_permiso" value="{{$v_inspeccion->fechaemision_permiso}}"> <span class="glyphicon glyphicon-calendar"></span>
         	 </div>
             <div class="form-group">
        		<label for="observaciones">Obeservaciones:</label>
        		<input type="observaciones" style="width : 400px; heigth : 400px" name="observaciones" value="{{$v_inspeccion->observaciones}}" readonly>
        	 </div>
             <div>
                <input type="checkbox" name="empresa_nueva"  value="{{$v_inspeccion->empresa_nueva}}">Empresa Nueva
             <div>
        		<button type="submit" class="btn btn-primary">Registrar</button>
        		<a href="{{url('/visitainspeccion')}}" class="btn btn-danger">Cancelar</a>
           	 </div>
             </input>
             </form>
        @endsection
    @endsection
