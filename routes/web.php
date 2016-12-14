<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();


/* -- RUTAS DE LAYOUT -- */
Route::get('home', 'HomeController@index');


/* -- PLANEACION -- */
Route::get('planeacion', 'Modulos\PlaneacionController@index');
Route::get('planeacion/submodulos', 'Modulos\PlaneacionController@submodulos');
Route::get('planeacion/consultas', 'Modulos\PlaneacionController@consultas');
Route::get('planeacion/configuraciones', 'Modulos\PlaneacionController@configuraciones');
Route::get('planeacion/manuales', 'Modulos\PlaneacionController@manuales');

/* -- PRESUPUESTO -- */
Route::get('presupuesto', 'Modulos\PresupuestoController@index');
Route::get('presupuesto/submodulos', 'Modulos\PresupuestoController@submodulos');
Route::get('presupuesto/consultas', 'Modulos\PresupuestoController@consultas');
Route::get('presupuesto/configuraciones', 'Modulos\PresupuestoController@configuraciones');
Route::get('presupuesto/manuales', 'Modulos\PresupuestoController@manuales');

/* -- CONTABILIDAD -- */
Route::get('contabilidad', 'Modulos\ContabilidadController@index');
Route::get('contabilidad/submodulos', 'Modulos\ContabilidadController@submodulos');
Route::get('contabilidad/configuraciones', 'Modulos\ContabilidadController@configuraciones');
Route::get('contabilidad/manuales', 'Modulos\ContabilidadController@manuales');

/* -- INGRESOS -- */
Route::get('ingresos', 'Modulos\IngresosController@index');
Route::get('ingresos/submodulos', 'Modulos\IngresosController@submodulos');
Route::get('ingresos/configuraciones', 'Modulos\IngresosController@configuraciones');
Route::get('ingresos/manuales', 'Modulos\IngresosController@manuales');

/* -- TESORERIA -- */
Route::get('tesoreria', 'Modulos\TesoreriaController@index');
Route::get('tesoreria/submodulos', 'Modulos\TesoreriaController@submodulos');
Route::get('tesoreria/configuraciones', 'Modulos\TesoreriaController@configuraciones');
Route::get('tesoreria/manuales', 'Modulos\TesoreriaController@manuales');

/* -- RECURSOS HUMANOS -- */
Route::get('recursos_humanos', 'Modulos\RecursosHumanosController@index');
Route::get('recursos_humanos/submodulos', 'Modulos\RecursosHumanosController@submodulos');
Route::get('recursos_humanos/configuraciones', 'Modulos\RecursosHumanosController@configuraciones');
Route::get('recursos_humanos/manuales', 'Modulos\RecursosHumanosController@manuales');

/* -- DEUDA PÚBLICA -- */
Route::get('deuda_publica', 'Modulos\DeudaPublicaController@index');
Route::get('deuda_publica/submodulos', 'Modulos\DeudaPublicaController@submodulos');
Route::get('deuda_publica/configuraciones', 'Modulos\DeudaPublicaController@configuraciones');
Route::get('deuda_publica/manuales', 'Modulos\DeudaPublicaController@manuales');

/* -- BIENES -- */
Route::get('bienes', 'Modulos\BienesController@index');
Route::get('bienes/submodulos', 'Modulos\BienesController@submodulos');
Route::get('bienes/configuraciones', 'Modulos\BienesController@configuraciones');
Route::get('bienes/manuales', 'Modulos\BienesController@manuales');

/* -- OBRA PÚBLICA -- */
Route::get('obra_publica', 'Modulos\ObraPublicaController@index');
Route::get('obra_publica/submodulos', 'Modulos\ObraPublicaController@submodulos');
Route::get('obra_publica/configuraciones', 'Modulos\ObraPublicaController@configuraciones');
Route::get('obra_publica/manuales', 'Modulos\ObraPublicaController@manuales');


/* -- RUTAS DE HERRAMIENTAS -- */
Route::get('monitoreo', 'Modulos\MonitoreoController@index');
Route::get('tutoriales', 'Modulos\HerramientasController@tutoriales');
Route::get('soporte', 'Modulos\HerramientasController@soporte');


/* -- RUTAS DE CONFIGURACIONES -- */


/* -- PLANEACION -- */
Route::get('planeacion/configuraciones/clasificadores_egreso', 'Submodulos\PlaneacionConfigController@configClasificadoresEgreso');



/* -- RUTAS DE CONSULTAS -- */

/* -- PLANEACION -- */
Route::get('planeacion/consultas/presupuesto_aprobado', 'Submodulos\PlaneacionSubmodulosController@show');

/* -- PRESUPUESTO -- */
Route::get('presupuesto/consultas/suficiencia_presupuestal', 'Submodulos\PresupuestoSubmodulosController@suficienciaPresupuestal');
Route::get('presupuesto/consultas/suficiencia_presupuestal', 'Submodulos\PresupuestoSubmodulosController@show');


/* -- CONTABILIDAD -- */
Route::get('contabilidad/consultas', 'Submodulos\ContabilidadSubmodulosController@contabilidadConsultas');
Route::get('contabilidad/consultas/libro_diario', 'Submodulos\ContabilidadSubmodulosController@consultasLibroDiario');
Route::get('contabilidad/consultas/libro_mayor', 'Submodulos\ContabilidadSubmodulosController@consultasLibroMayor');

/* -- PLANEACION -- */



/* -- RUTAS DE SUB-MÓDULOS -- */

Route::get('bienes/submodulo/almacen', 'Submodulos\BienesSubmodulosController@almacen');
Route::get('bienes/submodulo/almacen/consulta_existencias', 'Submodulos\BienesSubmodulosController@consultaExistencias');
Route::get('bienes/submodulo/almacen/consulta_inventario_consumo', 'Submodulos\BienesSubmodulosController@consultaInventario');
Route::get('bienes/submodulo/almacen/consulta_inventario_consumo', 'Submodulos\BienesSubmodulosController@showConsultaInventario');

/* -- Adquisiciones -- */
Route::get('bienes/submodulo/adquisiciones', 'Submodulos\BienesSubmodulosController@adquisiciones');
Route::get('bienes/submodulo/adquisiciones/verificacion_documentos', 'Submodulos\BienesSubmodulosController@verificacionDocumentos');



Route::get('bienes/submodulo/adquisiciones/solicitud_bienes/', 'Submodulos\SolicitudBienesController@solicitudBienes');

Route::get('bienes/submodulo/adquisiciones/solicitud_bienes/{id}', 'Submodulos\SolicitudBienesController@create');
Route::post('bienes/submodulo/adquisiciones/solicitud_bienes/{id}', 'Submodulos\SolicitudBienesController@store');

Route::get('bienes/submodulo/adquisiciones/solicitud_bienes', 'Submodulos\SolicitudBienesController@catCreate');
Route::get('bienes/submodulo/adquisiciones/autorizacion_bienes', 'Submodulos\SolicitudBienesController@autorizacionBienes');
Route::get('bienes/submodulo/adquisiciones/autorizacion_bienes', 'Submodulos\SolicitudBienesController@show');


Route::get('bienes/submodulo/adquisiciones/registro_orden_compra', 'Submodulos\OrdenCompraController@ordenCompra');
Route::get('bienes/submodulo/adquisiciones/registro_orden_compra', 'Submodulos\OrdenCompraController@catCreate');

Route::post('bienes/submodulo/adquisiciones/registro_orden_compra', 'Submodulos\OrdenCompraController@store');

Route::get('bienes/submodulo/adquisiciones/autorizacion_orden_compra', 'Submodulos\OrdenCompraController@autorizacionCompra');
Route::get('bienes/submodulo/adquisiciones/autorizacion_orden_compra', 'Submodulos\OrdenCompraController@show');

/* -- Almacén -- */
Route::get('bienes/submodulo/almacen/entrada_inventario', 'Submodulos\BienesSubmodulosController@entradaInventario');
Route::post('bienes/submodulo/almacen/entrada_inventario', 'Submodulos\BienesSubmodulosController@storeEntradaInventario');


/* -- Presupuesto -- */
Route::get('presupuesto/submodulo/autorizaciones', 'Submodulos\PresupuestoSubmodulosController@autoriza');
Route::get('presupuesto/submodulo/autorizaciones', 'Submodulos\PresupuestoSubmodulosController@showAutoriza');


Route::get('planeacion/submodulo/carga_presupuesto_aprobado', 'Submodulos\PlaneacionSubmodulosController@planeacionsub15');
Route::get('planeacion/submodulo/carga_presupuesto_aprobado', 'Submodulos\PlaneacionSubmodulosController@create');
Route::post('planeacion/submodulo/carga_presupuesto_aprobado', 'Submodulos\PlaneacionSubmodulosController@store');


/* -- RUTAS DE REPORTES -- */
Route::get('contabilidad/reportes/libro_diario', 'Reportes\ContabilidadReportesController@reporte1');
Route::get('contabilidad/reportes/pdf/libro_diario', 'Reportes\ContabilidadReportesController@reportePDF1');


Route::get('contabilidad/reportes/libro_mayor', 'Reportes\ContabilidadReportesController@reporte2');





/* -- RUTAS DE TOOLS -- */
Route::get('abc_armonizacion', 'Modulos\ToolsController@abc_armonizacion');



