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
Route::post('/', 'PostulacionController@store')->name('postulacion.store');
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
Route::view('/especialidades/fisiatria', 'especialidades/fisiatria')->name('fisiatria_espe');
Route::view('/especialidades/neurocirugia', 'especialidades/neurocirugia')->name('neurocirugia');
Route::view('/especialidades/nutricion', 'especialidades/nutricion')->name('nutricion');
Route::view('/especialidades/reumatologia', 'especialidades/reumatologia')->name('reumatologia');
Route::view('/especialidades/cirugia_plastica', 'especialidades/cirugia_plastica')->name('cirugia_plastica');


// -----------o-----------------o--------Rutas de especialidades-----------o-----------------o-------



// -----------o-----------------o--------Rutas de Laboratorio-----------o-----------------o-------


Route::view('/laboratorio/clinico/medicos/san-bernardino/podologico', 'laboratorio/laboratorio_clinico')->name('laboratorio_medico');
Route::view('/laboratorio/clinico/medicos/san-bernardino/tipos_examenes', 'laboratorio/tipos_examenes')->name('tipos_examenes');
Route::view('/laboratorio/clinico/medicos/san-bernardino/tabla_valores', 'laboratorio/tabla_valores')->name('tabla_valores');

// -----------o-----------------o--------Rutas de Laboratorio-----------o-----------------o-------

// -----------o-----------------o--------Rutas de APS-----------o-----------------o-------
Route::view('/aps/seguros', 'aps/seguros')->name('seguros');
Route::view('/aps/directorio_medico', 'aps/directorio')->name('directorio_medico');
// -----------o-----------------o--------Rutas de APS-----------o-----------------o-------

Route::view('/servicios_medicos/ambulancia', 'servicios_medicos/ambulancia') -> name('ambulancia');
Route::view('/servicios_medicos/ambulatorio', 'servicios_medicos/ambulatorio') -> name('ambulatorio');
Route::view('/servicios_medicos/analgesia_postoperatorias', 'servicios_medicos/analgesia_postoperatorias') -> name('analgesia');
Route::view('/servicios_medicos/anatomia_patologica', 'servicios_medicos/anatomia_patologica') -> name('anatomia');
Route::view('/servicios_medicos/cuidados_intensivos', 'servicios_medicos/cuidados_intensivos') -> name('cuidados_i');
Route::view('/servicios_medicos/directorio', 'servicios_medicos/directorio') -> name('directorio');
Route::view('/servicios_medicos/ecografia', 'servicios_medicos/ecografia') -> name('ecografia');
Route::view('/servicios_medicos/emergencia24', 'servicios_medicos/emergencia24') -> name('emergencia24');
Route::view('/servicios_medicos/farmacia_unidosis', 'servicios_medicos/farmacia_unidosis') -> name('farmacia_u');
Route::view('/servicios_medicos/fisiatria', 'servicios_medicos/fisiatria') -> name('fisiatria');
Route::view('/servicios_medicos/mapa_del_sitio', 'servicios_medicos/mapa_del_sitio') -> name('mapa_sitio');
Route::view('/servicios_medicos/primeros_auxilios', 'servicios_medicos/primeros_auxilios') -> name('primeros_aux');
Route::view('/servicios_medicos/quimioterapia', 'servicios_medicos/quimioterapia') -> name('quimioterapia');
Route::view('/servicios_medicos/quirofano', 'servicios_medicos/quirofano') -> name('quirofano');
Route::view('/servicios_medicos/reemplazos_articulares', 'servicios_medicos/reemplazos_articulares') -> name('reemplazos_art');
Route::view('/servicios_medicos/resonancias_rayosx', 'servicios_medicos/resonancias_rayosx') -> name('resonancias_rayosx');
Route::view('/servicios_medicos/imaginologia', 'servicios_medicos/imaginologia') -> name('imaginologia');
Route::view('/activacion', 'activacion') -> name('activar');
Route::post('/activar_c', 'Registro@activar');


Route::view('/registro', 'usuario/registrar') -> name('registro');
Route::post('/registro_1', 'Registro@registro_v');
Route::post('/registro_2', 'Registro@registro_p');
Route::post('/registro_3', 'Registro@registro_e');
Route::post('/registro_4', 'Registro@registro_m');
Route::post('/registro_5', 'Registro@registro_a');
Route::post('/registro_6', 'Registro@registro_pw');
Route::post('/registro_7', 'Registro@registro_pv');
Route::post('/registro_8', 'Registro@registro_t');

Route::post('/login', 'Registro@login');
?>