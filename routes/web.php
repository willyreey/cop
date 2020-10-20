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

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/', 'index')->name('principal');
Route::view('/quienes_somos', 'quienes_somos')->name('quienes_somos');
Route::view('/solicitud_citas', 'solicitud_citas')->name('solicitud_citas');
Route::view('/contacto', 'contacto')->name('contacto');



// -----------o-----------------o--------Rutas de especialidades-----------o-----------------o-------


Route::view('/especialidades/traumatologia', 'especialidades/traumatologia')->name('traumatologia');;
Route::view('/especialidades/oncologia', 'especialidades/oncologia')->name('oncologia');
Route::view('/especialidades/cardiologia', 'especialidades/cardiologia')->name('cardiologia');
Route::view('/especialidades/cirugia', 'especialidades/cirugia')->name('cirugia');
Route::view('/especialidades/coloproctologia', 'especialidades/coloproctologia')->name('coloproctologia');
Route::view('/especialidades/gastroenterologia', 'especialidades/gastroenterologia')->name('gastroenterologia');
Route::view('/especialidades/ginecologia', 'especialidades/ginecologia')->name('ginecologia');
Route::view('/especialidades/hematologia', 'especialidades/hematologia')->name('hematologia');
Route::view('/especialidades/medicinainterna', 'especialidades/medicinainterna')->name('medicinainterna');
Route::view('/especialidades/optometria', 'especialidades/optometrista')->name('optometrista');
Route::view('/especialidades/pediatria', 'especialidades/pediatria')->name('pediatria');
Route::view('/especialidades/podologia', 'especialidades/podologia')->name('podologia');
Route::view('/especialidades/psicologia', 'especialidades/psicologia')->name('psicologia');
Route::view('/especialidades/psiquiatria', 'especialidades/psiquiatria')->name('psiquiatria');
Route::view('/especialidades/neurofisiologia', 'especialidades/neurofisiologia')->name('neurofisiologia');
Route::view('/especialidades/urologia', 'especialidades/urologia')->name('urologia');


// -----------o-----------------o--------Rutas de especialidades-----------o-----------------o-------



// -----------o-----------------o--------Rutas de Laboratorio-----------o-----------------o-------


Route::view('/laboratorio/clinico/medicos/san-bernardino/podologico', 'laboratorio/laboratorio_clinico')->name('laboratorio_medico');
Route::view('/laboratorio/clinico/medicos/san-bernardino/tipos_examenes', 'laboratorio/tipos_examenes')->name('tipos_examenes');
Route::view('/laboratorio/clinico/medicos/san-bernardino/tabla_valores', 'laboratorio/tabla_valores')->name('tabla_valores');

// -----------o-----------------o--------Rutas de Laboratorio-----------o-----------------o-------