@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Cambiar Contraseña de: {{ Auth::user()->name }} </font></h1>
        <form action="{{url('/actualizarpassword')}}/{{$user->id}}" method="POST">
        <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="password">Contraseña Nueva:</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <div class="form-group">
            <label for="password">Repetir Contraseña:</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{url('/perfil')}}" class="btn btn-danger">Cancelar</a>
            </div>
            </input>
        </form>
        @endsection
    @endsection
