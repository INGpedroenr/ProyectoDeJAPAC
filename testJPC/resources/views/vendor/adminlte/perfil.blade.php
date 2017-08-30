@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
			@include('flash::message')
			<h1><font color="negro">Perfil de: {{ Auth::user()->name }} </font></h1>
            <br><br>
                <thead>
                    <tr>
                        <h3><font color="negro">Nombre: <font size=4>{{ Auth::user()->name }} </font></font></h3>
                    </tr>
                    <br>
                    <tr>
                        <h4><font color="negro">Correo Electronico: <font size=4>{{ Auth::user()->email }} </font></font></h4>
                    </tr>
                    <br>
                    <tr>
                        <h4><font color="negro">Departamento: <font size=4>{{ Auth::user()->departamento }} </font></font></h4>
                    </tr>
                    <br>
                    <tr>
                        <h4><font color="negro">Puesto: <font size=4>{{ Auth::user()->puesto }} </font></font></h4>
                    </tr>
                </thead>
            <br>
			    <td><a href="{{url('/editarperfil')}}/{{Auth::user()->id}}" class="btn btn-success btn-xs"><span>Editar Perfil</span></a></td>
                <td><a href="{{url('/cambiarcontraseña')}}/{{Auth::user()->id}}" class="btn btn-success btn-xs"><span>Cambiar Contraseña</span></a></td>
			<div class="text-center">
			</div>
				<script type="text/javascript">
            		setTimeout(function() {
                		$(".alert").fadeOut(1500);
            		},1500);
				</script>

		@endsection

	@endsection
