<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InicioProcedimiento;
use App\VisitaInspeccion;
use App\Establecimientos;
use DB;

class InicioProcedimientoController extends Controller
{
    public function registrar()
    {
            $v_inspeccion=VisitaInspeccion::all();
            return view('adminlte::registrarinicioprocedimiento', compact('v_inspeccion'));
    }

    public function cargadatos($id)
    {
        $v_inspeccion=VisitaInspeccion::find($id);
        $establecimientos=Establecimientos::find($v_inspeccion->establecimientos_id);
        return view('adminlte::registrarinicioprocedimientoc', compact('v_inspeccion', 'establecimientos'));
    }

    public function guardar(Request $datos)
    {
        $i_procedimiento=new InicioProcedimiento();
        $i_procedimiento->laboratorio=$datos->input('laboratorio');
        $i_procedimiento->dbo=$datos->input('dbo');
        $i_procedimiento->sst=$datos->input('sst');
        $i_procedimiento->gya=$datos->input('gya');
        $i_procedimiento->num_oficioIP=$datos->input('num_oficioIP');
        $i_procedimiento->fecha_elaboracion=$datos->input('fecha_elaboracion');
        $i_procedimiento->fecha_recibidoIP=$datos->input('fecha_recibidoIP');
        $i_procedimiento->v_inspeccion_id=$datos->input('numv_inspeccion');
        $i_procedimiento->v_inspeccion_id=$datos->input('razon_social');
        $i_procedimiento->v_inspeccion_id=$datos->input('actividad');
        $i_procedimiento->v_inspeccion_id=$datos->input('calle');
        $i_procedimiento->v_inspeccion_id=$datos->input('num_exterior');
        $i_procedimiento->v_inspeccion_id=$datos->input('num_interior');
        $i_procedimiento->v_inspeccion_id=$datos->input('colonia');
        $i_procedimiento->v_inspeccion_id=$datos->input('codigo_postal');
        $i_procedimiento->save();
        flash('¡Se guardo exitósamente el Inicio de Procedimiento');
        return redirect('/inicioprocedimiento');
    }

    public function actualizar($id, Request $datos)
    {
        $i_procedimiento=InicioProcedimiento::find($id);
        $i_procedimiento->laboratorio=$datos->input('laboratorio');
        $i_procedimiento->dbo=$datos->input('dbo');
        $i_procedimiento->sst=$datos->input('sst');
        $i_procedimiento->gya=$datos->input('gya');
        $i_procedimiento->num_oficioIP=$datos->input('num_oficioIP');
        $i_procedimiento->fecha_elaboracion=$datos->input('fecha_elaboracion');
        $i_procedimiento->fecha_recibidoIP=$datos->input('fecha_recibidoIP');
        $i_procedimiento->v_inspeccion_id=$datos->input('numv_inspeccion');
        $i_procedimiento->v_inspeccion_id=$datos->input('razon_social');
        $i_procedimiento->v_inspeccion_id=$datos->input('actividad');
        $i_procedimiento->v_inspeccion_id=$datos->input('calle');
        $i_procedimiento->v_inspeccion_id=$datos->input('num_exterior');
        $i_procedimiento->v_inspeccion_id=$datos->input('num_interior');
        $i_procedimiento->v_inspeccion_id=$datos->input('colonia');
        $i_procedimiento->v_inspeccion_id=$datos->input('codigo_postal');
        $i_procedimiento->save();
        flash('¡Se actualizo exitósamente el Inicio de Procedimiento');
        return redirect('/inicioprocedimiento');
    }

    public function editar($id)
    {
       $v_inspeccion=DB::table('i_procedimiento')
          ->where('i_procedimiento.id', '=', $id)
          ->join('establecimientos', 'v_inspeccion.establecimientos_id', '=', 'establecimientos.id')
          ->select('v_inspeccion.*', 'establecimientos.razon_social AS razon_social', 'establecimientos.actividad AS actividad', 'establecimientos.calle AS calle', 'establecimientos.num_exterior AS num_exterior', 'establecimientos.num_interior AS num_interior', 'establecimientos.colonia AS colonia', 'establecimientos.codigo_postal AS codigo_postal' ,'establecimientos.rfc AS rfc', 'establecimientos.email AS email', 'establecimientos.num_medidor AS num_medidor', 'establecimientos.cuenta AS cuenta')
          ->first();
       $establecimientos=Establecimientos::all();
       return view('adminlte::editarvisitainspeccion', compact('v_inspeccion', 'establecimientos'));
    }

    public function pdf()
    {
        $vista=view('adminlte::inicioprocedimientopdf', compact('v_inspeccion', 'establecimientos'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream('ListaInicioProdecimiento.pdf');
    }

    public function getinicioprocedimiento()
    {
        return view('adminlte::inicioProcedimiento');
    }
}
