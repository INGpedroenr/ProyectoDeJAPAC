<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitaInspeccion;
use App\Establecimientos;
use DB;

class VisitaInspeccionController extends Controller
{
    public function seleccionar(Request $id)
    {
        $establecimientos=DB::table('establecimientos')
        ->where('establecimientos.id', '=', $id)
        ->first();
        $establecimientos=Establecimientos::all();
    		return view('adminlte::seleccionarestablecimiento', compact('establecimientos'));
    }

    public function registrarymostrar ()
    {
        $establecimientos=Establecimientos::all();
        $v_inspeccion=VisitaInspeccion::all();
        return view('adminlte::registrarvisitainspeccion', compact('establecimientos'));
    }

    public function guardar(Request $datos)
    {
        		$v_inspeccion= new VisitaInspeccion();
        		$v_inspeccion->numv_inspeccion=$datos->input('numv_inspeccion');
        		$v_inspeccion->fechav_inspeccion=$datos->input('fechav_inspeccion');
        		$v_inspeccion->num_oficioVI=$datos->input('num_oficioVI');
        		$v_inspeccion->trampa=$datos->input('trampa');
            $v_inspeccion->num_permiso=$datos->input('num_permiso');
            $v_inspeccion->fechaemision_permiso=$datos->input('fechaemision_permiso');
            $v_inspeccion->observaciones=$datos->input('observaciones');
            $v_inspeccion->empresa_nueva=$datos->input('empresa_nueva');
            $v_inspeccion->establecimientos_id=$datos->input('razon_social');
            $v_inspeccion->establecimientos_id=$datos->input('actividad');
            $v_inspeccion->establecimientos_id=$datos->input('rfc');
            $v_inspeccion->establecimientos_id=$datos->input('email');
            $v_inspeccion->establecimientos_id=$datos->input('num_medidor');
            $v_inspeccion->establecimientos_id=$datos->input('cuenta');
            $v_inspeccion->establecimientos_id=$datos->input('calle');
            $v_inspeccion->establecimientos_id=$datos->input('num_exterior');
            $v_inspeccion->establecimientos_id=$datos->input('num_interior');
            $v_inspeccion->establecimientos_id=$datos->input('colonia');
            $v_inspeccion->establecimientos_id=$datos->input('codigo_postal');
    		    $v_inspeccion->save();
            flash('¡Se guardaron exitósamente la Visita de Inspeccione')->success();
    		    return redirect('/visitainspeccion');
    }

     public function actualizar($id, Request $datos)
     {
           $v_inspeccion=VisitaInspeccion::find($id);
           $v_inspeccion->numv_inspeccion=$datos->input('numv_inspeccion');
           $v_inspeccion->fechav_inspeccion=$datos->input('fechav_inspeccion');
           $v_inspeccion->num_oficioVI=$datos->input('num_oficioVI');
           $v_inspeccion->trampa=$datos->input('trampa');
           $v_inspeccion->num_permiso=$datos->input('num_permiso');
           $v_inspeccion->fechaemision_permiso=$datos->input('fechaemision_permiso');
           $v_inspeccion->observaciones=$datos->input('observaciones');
           $v_inspeccion->empresa_nueva=$datos->input('empresa_nueva');
           $v_inspeccion->establecimientos_id=$datos->input('razon_social');
           $v_inspeccion->establecimientos_id=$datos->input('actividad');
           $v_inspeccion->establecimientos_id=$datos->input('rfc');
           $v_inspeccion->establecimientos_id=$datos->input('email');
           $v_inspeccion->establecimientos_id=$datos->input('num_medidor');
           $v_inspeccion->establecimientos_id=$datos->input('cuenta');
           $v_inspeccion->establecimientos_id=$datos->input('calle');
           $v_inspeccion->establecimientos_id=$datos->input('num_exterior');
           $v_inspeccion->establecimientos_id=$datos->input('num_interior');
           $v_inspeccion->establecimientos_id=$datos->input('colonia');
           $v_inspeccion->establecimientos_id=$datos->input('codigo_postal');
           $v_inspeccion->save();
           flash('¡Se actualizo exitósanmente la Visita de Inspeccion');
           return redirect('/visitainspeccion');
     }

     public function eliminar($id)
     {
        $v_inspeccion=VisitaInspeccion::find($id);
        $v_inspeccion->delete();
        flash('¡Se elimino exitósamente la Visita de Inspeccion');
        return redirect('visitainspeccion');
     }

     public function editar($id)
     {
        $v_inspeccion=DB::table('v_inspeccion')
           ->where('v_inspeccion.id', '=', $id)
           ->join('establecimientos', 'v_inspeccion.establecimientos_id', '=', 'establecimientos.id')
           ->select('v_inspeccion.*', 'establecimientos.razon_social AS razon_social', 'establecimientos.actividad AS actividad', 'establecimientos.calle AS calle', 'establecimientos.num_exterior AS num_exterior', 'establecimientos.num_interior AS num_interior', 'establecimientos.colonia AS colonia', 'establecimientos.codigo_postal AS codigo_postal' ,'establecimientos.rfc AS rfc', 'establecimientos.email AS email', 'establecimientos.num_medidor AS num_medidor', 'establecimientos.cuenta AS cuenta')
           ->first();
        $establecimientos=Establecimientos::all();
        return view('adminlte::editarvisitainspeccion', compact('v_inspeccion', 'establecimientos'));
     }

     public function consultar(){
             //$alumnos=Alumnos::paginate(5);
        $v_inspeccion=DB::table('v_inspeccion')
           ->join('establecimientos', 'v_inspeccion.establecimientos_id', '=', 'establecimientos.id')
           ->select('v_inspeccion.*', 'establecimientos.razon_social AS razon_social', 'establecimientos.actividad AS actividad', 'establecimientos.calle AS calle')
           ->paginate(5);

         return view('adminlte::visitainspeccion', compact('v_inspeccion'));
     }

    public function pdf()
    {
        $v_inspeccion=VisitaInspeccion::all();
        $establecimientos=Establecimientos::all();
        $vista=view('adminlte::visitainspeccionpdf', compact('v_inspeccion', 'establecimientos'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream('ListaVisitaInspeccion.pdf');
    }

    public function getvisitainspeccion()
    {
        $v_inspeccion=VisitaInspeccion::all();
        $establecimientos=Establecimientos::all();
        return view('adminlte::visitaInspeccion');
    }
}
