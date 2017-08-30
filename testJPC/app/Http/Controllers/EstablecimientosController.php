<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establecimientos;
use DB;

class EstablecimientosController extends Controller
{
		public function registrar()
		{
				return view('adminlte::registrarEstablecimientos');
		}

		public function guardar(Request $datos)
		{
				$establecimientos= new Establecimientos();
				$establecimientos->nombre_establecimiento=$datos->input('nombre_establecimiento');
				$establecimientos->razon_social=$datos->input('razon_social');
				$establecimientos->rfc=$datos->input('rfc');
				$establecimientos->actividad=$datos->input('actividad');
				$establecimientos->calle=$datos->input('calle');
				$establecimientos->num_exterior=$datos->input('num_exterior');
				$establecimientos->num_interior=$datos->input('num_interior');
				$establecimientos->colonia=$datos->input('colonia');
				$establecimientos->codigo_postal=$datos->input('codigo_postal');
				$establecimientos->telefono=$datos->input('telefono');
				$establecimientos->num_medidor=$datos->input('num_medidor');
				$establecimientos->cuenta=$datos->input('cuenta');
				$establecimientos->email=$datos->input('email');
				$establecimientos->save();
				flash('¡Se guardaron exitósamente los datos!')->success();
				return redirect('/establecimientos');
		}

		public function eliminar($id)
		{
				$establecimientos=Establecimientos::find($id);
				$establecimientos->delete();
				flash('¡Se elimino exitósamento el Establecimiento!')->success();
				return redirect('/establecimientos');
		}

		public function editar($id)
		{
			$establecimientos=DB::table('establecimientos')
			->where('establecimientos.id', '=', $id)
            ->select('establecimientos.*')
            ->first();
			return view('adminlte::editarestablecimientos', compact('establecimientos'));
		}


		public function actualizar($id, Request $datos)
		{
			$establecimientos=Establecimientos::find($id);
			$establecimientos->nombre_establecimiento=$datos->input('nombre_establecimiento');
			$establecimientos->razon_social=$datos->input('razon_social');
			$establecimientos->rfc=$datos->input('rfc');
			$establecimientos->actividad=$datos->input('actividad');
			$establecimientos->calle=$datos->input('calle');
            $establecimientos->num_exterior=$datos->input('num_exterior');
            $establecimientos->num_interior=$datos->input('num_interior');
            $establecimientos->colonia=$datos->input('colonia');
            $establecimientos->codigo_postal=$datos->input('codigo_postal');
            $establecimientos->telefono=$datos->input('telefono');
            $establecimientos->num_medidor=$datos->input('num_medidor');
            $establecimientos->cuenta=$datos->input('cuenta');
            $establecimientos->email=$datos->input('email');
			$establecimientos->save();
            flash('¡Se actualizo exitósamente el Establecimiento!')->success();
			return redirect('/establecimientos');
		}

		public function pdf()
		{
			$establecimientos=Establecimientos::all();
			$vista=view('adminlte::establecimientospdf', compact('establecimientos'));
			$pdf=\App::make('dompdf.wrapper');
			$pdf->loadHTML($vista);
			return $pdf->stream('ListaEstablecimientos.pdf');
		}

		public function getestablecimientos()
		{
				$establecimientos=Establecimientos::all();
				return view('adminlte::establecimientos', compact('establecimientos'));
		}

}
