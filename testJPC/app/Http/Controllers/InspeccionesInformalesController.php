<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InspeccionesInformales;
use DB;

class InspeccionesInformalesController extends Controller
{
    public function registrar()
    {
            return view('adminlte::registrarinspeccionesinformales');
    }

    public function guardar(Request $datos)
    {
            $i_informales= new InspeccionesInformales();
            $i_informales->fecha_inspeccion_informal=$datos->input('fecha_inspeccion_informal');
            $i_informales->num_infraccion=$datos->input('num_infraccion');
            $i_informales->nombre_establecimiento=$datos->input('nombre_establecimiento');
            $i_informales->calle=$datos->input('calle');
            $i_informales->num_exterior=$datos->input('num_exterior');
            $i_informales->num_interior=$datos->input('num_interior');
            $i_informales->colonia=$datos->input('colonia');
            $i_informales->actividad=$datos->input('actividad');
            $i_informales->codigo_postal=$datos->input('codigo_postal');
            $i_informales->num_medidor=$datos->input('num_medidor');
            $i_informales->cuenta=$datos->input('cuenta');
            $i_informales->señas_particulares=$datos->input('señas_particulares');
            $i_informales->nombre_inspector=$datos->input('nombre_inspector');
            $i_informales->num_inspector=$datos->input('num_inspector');
            $i_informales->motivo_infraccion=$datos->input('motivo_infraccion');
            $i_informales->observaciones=$datos->input('observaciones');
            $i_informales->elaboro=$datos->input('elaboro');
            $i_informales->save();
            flash('¡Se guardaron exitósamente los datos!')->success();
            return redirect('/inspeccionesinformales');
    }

    public function eliminar($id)
    {
            $i_informales=InspeccionesInformales::find($id);
            $i_informales->delete();
            flash('¡Se elimino exitósamento el Establecimiento!')->success();
            return redirect('/inspeccionesinformales');
    }

    public function editar($id)
    {
        $i_informales=DB::table('i_informales')
        ->where('i_informales.id', '=', $id)
        ->select('i_informales.*')
        ->first();
        return view('adminlte::editarinspeccionesinformales', compact('i_informales'));
    }

    public function actualizar($id, Request $datos)
    {

        $i_informales=InspeccionesInformales::find($id);
        $i_informales->fecha_inspeccion_informal=$datos->input('fecha_inspeccion_informal');
        $i_informales->num_infraccion=$datos->input('num_infraccion');
        $i_informales->nombre_establecimiento=$datos->input('nombre_establecimiento');
        $i_informales->calle=$datos->input('calle');
        $i_informales->num_exterior=$datos->input('num_exterior');
        $i_informales->num_interior=$datos->input('num_interior');
        $i_informales->colonia=$datos->input('colonia');
        $i_informales->actividad=$datos->input('actividad');
        $i_informales->codigo_postal=$datos->input('codigo_postal');
        $i_informales->num_medidor=$datos->input('num_medidor');
        $i_informales->cuenta=$datos->input('cuenta');
        $i_informales->señas_particulares=$datos->input('señas_particulares');
        $i_informales->nombre_inspector=$datos->input('nombre_inspector');
        $i_informales->num_inspector=$datos->input('num_inspector');
        $i_informales->motivo_infraccion=$datos->input('motivo_infraccion');
        $i_informales->observaciones=$datos->input('observaciones');
        $i_informales->elaboro=$datos->input('elaboro');
        $i_informales->save();
        flash('¡Se actualizo exitósamente la Infraccion!')->success();
        return redirect('/inspeccionesinformales');
    }

    public function pdf()
    {
        $i_informales=InspeccionesInformales::all();
        $vista=view('adminlte::inspeccionesInformalesPDF', compact('i_informales'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($vista);
        return $pdf->stream('ListaInfracciones.pdf');
    }

    public function getinspeccionesinformales()
    {
            $i_informales=InspeccionesInformales::all();
            return view('adminlte::inspeccionesInformales', compact('i_informales'));
    }
}
