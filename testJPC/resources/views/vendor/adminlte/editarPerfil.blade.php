@extends('adminlte::layouts.app')

	@section('htmlheader_title')

		@section('main-content')
		<h1><font color="negro">Editar Perfil de: {{ Auth::user()->name }} </font></h1>
        <form action="{{url('/actualizarperfil')}}/{{$user->id}}" method="POST">
        <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" required value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Correo Electronico:</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" class="form-control" name="departamento" value="{{$user->departamento}}">
        </div>
        <div class="form-group">
            <label for="puesto">Puesto:</label>
            <input type="text" class="form-control" name="puesto" required value="{{$user->puesto}}">
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{url('/perfil')}}" class="btn btn-danger">Cancelar</a>
            </div>
            </input>
        </form>
        @endsection
    @endsection
