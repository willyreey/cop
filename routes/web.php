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
    return view('index');
});

Auth::routes(['verify' => true]);
Route::view('/', 'index')->name('principal');
Route::post('/', 'PostulacionController@store')->name('postulacion.store');
Route::view('/quienes_somos', 'quienes_somos')->name('quienes_somos');
Route::get('/solicitud_citas', 'Preguntas@solicitud_citas_c')->name('solicitud_citas');
Route::view('/contacto', 'contacto')->name('contacto');

Route::group(['middleware' => 'verified'], function(){
Route::view('/chat', 'chat')->name('chat');
});




// -----------o-----------------o--------Rutas de especialidades-----------o-----------------o-------


// Route::view('/especialidades/traumatologia', 'especialidades/traumatologia')->name('traumatologia');
Route::get('/especialidades/traumatologia', 'Preguntas@traumatologia_c')->name('traumatologia');
Route::get('/especialidades/cirugia', 'Preguntas@cirugia_c')->name('cirugia');
Route::get('/especialidades/ginecologia', 'Preguntas@ginecologia_c')->name('ginecologia');
Route::get('/especialidades/oncologia', 'Preguntas@oncologia_c')->name('oncologia');
Route::get('/especialidades/cardiologia', 'Preguntas@cardiologia_c')->name('cardiologia');
Route::get('/especialidades/coloproctologia', 'Preguntas@coloproctologia_c')->name('coloproctologia');
Route::get('/especialidades/gastroenterologia', 'Preguntas@gastroenterologia_c')->name('gastroenterologia');
Route::get('/especialidades/gastroenterologia', 'Preguntas@gastroenterologia_c')->name('gastroenterologia');
Route::get('/especialidades/hematologia', 'Preguntas@hematologia_c')->name('hematologia');
Route::get('/especialidades/medicinainterna', 'Preguntas@medicinainterna_c')->name('medicinainterna');
Route::get('/especialidades/pediatria', 'Preguntas@pediatria_c')->name('pediatria');
Route::get('/especialidades/podologia', 'Preguntas@podologia_c')->name('podologia');
Route::get('/especialidades/psiquiatria', 'Preguntas@psiquiatria_c')->name('psiquiatria');
Route::get('/especialidades/neurofisiologia', 'Preguntas@neurofisiologia_c')->name('neurofisiologia');
Route::get('/especialidades/urologia', 'Preguntas@urologia_c')->name('urologia');
Route::view('/especialidades/fisiatria', 'especialidades/fisiatria')->name('fisiatria_espe');
Route::get('/especialidades/neurocirugia', 'Preguntas@neurocirugia_c')->name('neurocirugia');
Route::get('/especialidades/nutricion', 'Preguntas@nutricion_c')->name('nutricion');
Route::get('/especialidades/reumatologia', 'Preguntas@reumatologia_c')->name('reumatologia');
Route::get('/especialidades/cirugia_plastica', 'Preguntas@cirugia_plastica_c')->name('cirugia_plastica');


// -----------o-----------------o--------Rutas de especialidades-----------o-----------------o-------



// -----------o-----------------o--------Rutas de Laboratorio-----------o-----------------o-------


Route::get('/laboratorio/laboratorio_clinico', 'Preguntas@laboratorio_clinico_c')->name('laboratorio_medico');
Route::view('/laboratorio/clinico/medicos/san-bernardino/tipos_examenes', 'laboratorio/tipos_examenes')->name('tipos_examenes');
Route::view('/laboratorio/clinico/medicos/san-bernardino/tabla_valores', 'laboratorio/tabla_valores')->name('tabla_valores');

// -----------o-----------------o--------Rutas de Laboratorio-----------o-----------------o-------

// -----------o-----------------o--------Rutas de APS-----------o-----------------o-------
Route::view('/aps/seguros', 'aps/seguros')->name('seguros');
Route::view('/aps/directorio_medico', 'aps/directorio')->name('directorio_medico');
// -----------o-----------------o--------Rutas de APS-----------o-----------------o-------

Route::get('/servicios_medicos/ambulancia', 'Preguntas@ambulancia_c')->name('ambulancia');
Route::get('/servicios_medicos/resonancias_rayosx', 'Preguntas@resonancia_c')->name('resonancias_rayosx');
Route::get('/servicios_medicos/ambulatorio', 'Preguntas@ambulatorio_c')->name('ambulatorio');
Route::get('/servicios_medicos/mapa_del_sitio', 'Preguntas@mapa_sitio_c')->name('mapa_sitio');
Route::get('/servicios_medicos/primeros_auxilios', 'Preguntas@primeros_auxilios_c')->name('primeros_aux');
Route::get('/servicios_medicos/quirofano', 'Preguntas@quirofano_c')->name('quirofano');
Route::get('/servicios_medicos/reemplazos_articulares', 'Preguntas@reemplazos_c')->name('reemplazos_art');
Route::get('/servicios_medicos/emergencia24', 'Preguntas@emergencia24_c')->name('emergencia24');
Route::get('/servicios_medicos/directorio', 'Preguntas@directorio_c')->name('directorio');
Route::get('/servicios_medicos/ecografia', 'Preguntas@ecografia_c')->name('ecografia');
Route::get('/servicios_medicos/analgesia_postoperatorias', 'Preguntas@analgesia_c')->name('analgesia');
Route::get('/servicios_medicos/cuidados_intensivos', 'Preguntas@cuidados_intensivos_c')->name('cuidados_i');
Route::get('/servicios_medicos/imaginologia', 'Preguntas@imaginologia_c')->name('imaginologia');
Route::get('/servicios_medicos/fisiatria', 'Preguntas@fisiatria_c')->name('fisiatria');
Route::get('/servicios_medicos/farmacia_unidosis', 'Preguntas@farmacia_u_c')->name('farmacia_u');
Route::get('/servicios_medicos/anatomia_patologica', 'Preguntas@anatomia_c')->name('anatomia');
Route::get('/servicios_medicos/quimioterapia', 'Preguntas@quimioterapia_c')->name('quimioterapia');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'verified'], function(){

/* ·····················    COMENTARIOS DE ESPECIALIDADES   ·····················  */

Route::post('/especialidades/traumatologia','Preguntas@traumatologia')->name('traumatologia');
Route::post('/especialidades/cirugia','Preguntas@cirugia')->name('cirugia');
Route::post('/especialidades/ginecologia','Preguntas@ginecologia')->name('ginecologia');
Route::post('/especialidades/oncologia','Preguntas@oncologia')->name('oncologia');
Route::post('/especialidades/cardiologia','Preguntas@cardiologia')->name('cardiologia');
Route::post('/especialidades/coloproctologia','Preguntas@coloproctologia')->name('coloproctologia');
Route::post('/especialidades/gastroenterologia','Preguntas@gastroenterologia')->name('gastroenterologia');
Route::post('/especialidades/gastroenterologia','Preguntas@gastroenterologia')->name('gastroenterologia');
Route::post('/especialidades/hematologia','Preguntas@hematologia')->name('hematologia');
Route::post('/especialidades/medicinainterna','Preguntas@medicinainterna')->name('medicinainterna');
Route::post('/especialidades/pediatria','Preguntas@pediatria')->name('pediatria');
Route::post('/especialidades/podologia','Preguntas@podologia')->name('podologia');
Route::post('/especialidades/psiquiatria','Preguntas@psiquiatria')->name('psiquiatria');
Route::post('/especialidades/neurofisiologia','Preguntas@neurofisiologia')->name('neurofisiologia');
Route::post('/especialidades/urologia','Preguntas@urologia')->name('urologia');
Route::post('/especialidades/cirugia_plastica','Preguntas@cirugia_plastica')->name('cirugia_plastica');


/* ·····················    COMENTARIOS SERVICIOS MEDICOS   ·····················  */

Route::post('/servicios_medicos/ambulancia','Preguntas@ambulancia')->name('ambulancia');
Route::post('/servicios_medicos/resonancias_rayosx','Preguntas@resonancia')->name('resonancias_rayosx');
Route::post('/servicios_medicos/ambulatorio','Preguntas@ambulatorio')->name('ambulatorio');
Route::post('/servicios_medicos/mapa_del_sitio','Preguntas@mapa_sitio')->name('mapa_sitio');
Route::post('/servicios_medicos/primeros_auxilios','Preguntas@primeros_auxilios')->name('primeros_aux');
Route::post('/servicios_medicos/quirofano','Preguntas@quirofano')->name('quirofano');
Route::post('/servicios_medicos/reemplazos_articulares','Preguntas@reemplazos_articulares')->name('reemplazos_art');
Route::post('/servicios_medicos/emergencia24','Preguntas@emergencia24')->name('emergencia24');
Route::post('/servicios_medicos/directorio','Preguntas@directorio')->name('directorio');
Route::post('/servicios_medicos/ecografia','Preguntas@ecografia')->name('ecografia');
Route::post('/servicios_medicos/analgesia_postoperatorias','Preguntas@analgesia')->name('analgesia');
Route::post('/servicios_medicos/cuidados_intensivos','Preguntas@cuidados_intensivos')->name('cuidados_i');
Route::post('/servicios_medicos/imaginologia','Preguntas@imaginologia')->name('imaginologia');
Route::post('/servicios_medicos/fisiatria','Preguntas@fisiatria')->name('fisiatria');
Route::post('/servicios_medicos/farmacia_unidosis','Preguntas@farmacia_u')->name('farmacia_u');
Route::post('/servicios_medicos/anatomia_patologica','Preguntas@anatomia')->name('anatomia');
Route::post('/servicios_medicos/quimioterapia','Preguntas@quimioterapia')->name('quimioterapia');
Route::post('/laboratorio/laboratorio_clinico', 'Preguntas@laboratorio_clinico')->name('laboratorio_medico');
Route::post('/solicitud_citas', 'Preguntas@solicitud_citas')->name('solicitud_citas');
});