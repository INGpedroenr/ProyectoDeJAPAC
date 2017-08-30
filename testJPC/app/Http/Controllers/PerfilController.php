<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use DB;

class PerfilController extends Controller
{


    public function guardar(Request $datos)
    {
        $users=new Perfil();
        $users->name=$datos->input('name');
        $users->email=$datos->input('email');
        $users->departamento=$datos->input('departamento');
        $users->puesto=$datos->input('puesto');
        $users->save();
        flash('!Se Guardo exitósamente el Perfil!')->success();
        return redirect('/perfil');
    }

    public function actualizar($id, Request $datos)
    {
        $users=Perfil::find($id);
        $users->name=$datos->input('name');
        $users->email=$datos->input('email');
        $users->departamento=$datos->input('departamento');
        $users->puesto=$datos->input('puesto');
        $users->save();
        flash('!Se Actualizo exitósamente el Perfil')->success();
        return redirect('/perfil');
    }

    public function actualizarpassword($id, Request $datos)
    {
        $users=Perfil::find($id);
        $users->name=$datos->input('name');
        $users->email=$datos->input('email');
        $users->departamento=$datos->input('departamento');
        $users->puesto=$datos->input('puesto');
        $users->password=$datos->input('password');
        $users->save();
        flash('¡Se Cambio exitósamente la Contraseña');
        return redirect ('/perfil');
    }

    public function editarpassword($id)
    {
        $users=DB::table('users')
        ->where('users.id', '=', $id)
        ->select('users.password')
        ->first();
        return view('adminlte::cambiarcontraseña');
    }

    public function editar($id)
    {
        $users=DB::table('users')
        ->where('users.id', '=', $id)
        ->select('users.*')
        ->first();
        return view('adminlte::editarperfil');
    }

    public function getperfil()
    {
        $users=Perfil::all();
        return view('adminlte::perfil');
    }

}
