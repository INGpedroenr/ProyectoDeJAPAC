<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/welcome');
});



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

//Perfil ✓
Route::get('/perfil', 'PerfilController@getperfil');
//Editar el Perfil ✓
Route::get('/editarperfil/{id}', 'PerfilController@editar');
//Actualizar el Perfil ✓
Route::post('/actualizarperfil/{id}', 'PerfilController@actualizar');
//Cambiar Contraseña del Perfil ✓
Route::get('/cambiarcontraseña/{id}', 'PerfilController@editarpassword');
//Actualizar Contraseña del Perfil
Route::post('/actualizarpassword/{id}', 'PerfilController@actualizar');


//Establecimientos ✓
Route::get('/establecimientos', 'EstablecimientosController@getestablecimientos');
//Registra Establecimiento ✓
Route::get('/registrarestablecimientos', 'EstablecimientosController@registrar');
//Guardar Establecimientos ✓
Route::post('/guardarestablecimientos', 'EstablecimientosController@guardar');
//Actualizar Establecimientos ✓
Route::post('/actualizarestablecimientos/{id}', 'EstablecimientosController@actualizar');
//Muestra PDF Establecimientos ✓
Route::get('/pdfestablecimientos', 'EstablecimientosController@pdf');
//Eliminar Establecimientos ✓
Route::get('/eliminarestablecimientos/{id}', 'EstablecimientosController@eliminar');
//Editar Establecimientos ✓
Route::get('/editarestablecimientos/{id}', 'EstablecimientosController@editar');

//Inspecciones Formales
//Visita de Inspeccion ✓
Route::get('/visitainspeccion', 'VisitaInspeccionController@getvisitainspeccion');
//Selecciona un Establecimiento
Route::get('/seleccionarestablecimiento', 'VisitaInspeccionController@seleccionar');
//Muestra el Establecimiento y Registra la Visita de Inspeccion
Route::get('/registrarvisitainspeccion', 'VisitaInspeccionController@registrarymostrar');
//Guardar Visita de Inspeccion ✓
Route::post('/guardarvisitainspeccion', 'VisitaInspeccionController@guardar');
//Actualizar Visita de Inspeccion ✓
Route::post('/actualizarvisitainspeccion/{id}', 'VisitaInspeccionController@actualizar');
//Consultar Visita de Inspeccion ✓
Route::get('/visitainspeccion', 'VisitaInspeccionController@consultar');
//Muestra PDF Visitas de Inspeccion ✓
Route::get('/pdfvisitainspeccion', 'VisitaInspeccionController@pdf');
//Eliminar Visita de Inspeccion ✓
Route::get('/eliminarvisitainspeccion/{id}', 'VisitaInspeccionController@eliminar');
//Editar Visita de Inspeccion ✓
Route::get('/editarvisitainspeccion/{id}', 'VisitaInspeccionController@editar');

//Inicio de Procedimiento ✓
Route::get('/inicioprocedimiento', 'InicioProcedimientoController@getinicioprocedimiento');
//Registra Inicio de Procedimiento
Route::get('/registrarinicioprocedimiento', 'InicioProcedimientoController@registrar');
//Despliega Datos
Route::post('/registrarinicioprocedimiento/{id}', 'InicioProcedimientoController@cargadatos');
//Guardar Inicio de Procedimiento
Route::post('/guardarinicioprocedimiento', 'InicioProcedimientoController@guardar');
//Actualizar Actualizar Inicio de Procedimiento
Route::post('/actualizarinicioprocedimiento/{id}', 'VisitaInspeccionController@actualizar');
//Muestra PDF Inicio de Procedimiento ✓
Route::get('/pdfinicioprocedimiento', 'InicioProcedimientoController@pdf');
//Editar Visita de Inspeccion
Route::get('/editarinicioprocedimiento/{id}', 'InicioProcedimientoController@editar');


//Calculo de Indice de Incumplimientos ✓
Route::get('/indiceincumplimiento', 'IndiceIncumplimientoController@getindiceincumplimiento');
//Resolutivo Administrativos ✓
Route::get('/resolutivoadministrativo', 'ResolutivoAdministrativoController@getresolutivoadministrativo');

//Laboratorio Externos
//Resultados de Laboratorios Externos ✓
Route::get('/resultadoslabexternos', 'ResultadosLabExternosController@getresultadoslabexternos');
//Inicio de Procedimientos de Laboratorios Externos ✓
Route::get('/inicioprocedimientolabexternos','InicioProcedimientoLabExternosController@getinicioprocedimientolabexternos');
//Calculo de Indice de Incumplimiento de Laboratorios Externos ✓
Route::get('/indiceincumplimientolabexternos', 'IndiceIncumplimientoLabExternosController@getindiceincumplimientolabexternos');
//Resolutivo Administrativos de Laboratiors Externos ✓
Route::get('/resolutivoadministrativolabexternos', 'ResolutivoAdministrativoLabExternosController@getresolutivoadministrativolabexternos');

//Inspecciones Informales ✓
Route::get('/inspeccionesinformales', 'InspeccionesInformalesController@getinspeccionesinformales');
//Registra Inspecciones Informales ✓
Route::get('/registrarinspeccionesinformales', 'InspeccionesInformalesController@registrar');
//Guardar Inspecciones Informales ✓
Route::post('/guardarinspeccionesinformales', 'InspeccionesInformalesController@guardar');
//Actualizar Inspecciones Informales ✓
Route::post('/actualizarinspeccionesinformales/{id}', 'InspeccionesInformalesController@actualizar');
//Muestra PDF de Inspeciones Informales ✓
Route::get('/pdfinspeccionesinformales', 'InspeccionesInformalesController@pdf');
//Eliminar Inspecciones Informales ✓
Route::get('/eliminarinspeccionesinformales/{id}', 'InspeccionesInformalesController@eliminar');
//Editar Inspecciones Informales ✓
Route::get('/editarinspeccionesinformales/{id}', 'InspeccionesInformalesController@editar');
