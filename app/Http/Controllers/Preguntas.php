<?php

namespace App\Http\Controllers;

use App\Pregunta as Pregunta;
use Illuminate\Http\Request;
use DB;
use Alert;
use Session;
use Illuminate\Support\Facades\Route;
use Arr;

class Preguntas extends Controller
{
     //
     
    /* ···································································· */ 
    public function traumatologia(Request $request){

        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "traumatologia";
        $pregunta->save();


        return redirect('/especialidades/traumatologia');

    }

    public function traumatologia_c(){
         $sql = DB::table('preguntas')
         ->where('tipo','traumatologia')
         ->get();   
        return view('/especialidades/traumatologia',compact('sql'));
    }
    /* ···································································· */ 



    /* ···································································· */ 

    public function cirugia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "cirugia";
        $pregunta->save();

        return redirect('/especialidades/cirugia');
    }

    public function cirugia_c(){
         $sql = DB::table('preguntas')->where('tipo','cirugia')->get();   
        return view('/especialidades/cirugia',compact('sql'));
    }

    /* ···································································· */ 




    /* ···································································· */ 

    public function ginecologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "ginecologia";
        $pregunta->save();

        return redirect('/especialidades/ginecologia');
    }

    public function ginecologia_c(){
         $sql = DB::table('preguntas')->where('tipo','ginecologia')->get();   
        return view('/especialidades/ginecologia',compact('sql'));
    }


    /* ···································································· */ 




    /* ···································································· */ 

    public function oncologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "oncologia";
        $pregunta->save();

        return redirect('/especialidades/oncologia');
    }

    public function oncologia_c(){
         $sql = DB::table('preguntas')->where('tipo','oncologia')->get();   
        return view('/especialidades/oncologia',compact('sql'));
    }

    
    /* ···································································· */ 



    /* ···································································· */ 

    public function cardiologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "cardiologia";
        $pregunta->save();

        return redirect('/especialidades/cardiologia');
    }

    public function cardiologia_c(){
         $sql = DB::table('preguntas')->where('tipo','cardiologia')->get();   
        return view('/especialidades/cardiologia',compact('sql'));
    }

    
    /* ···································································· */ 



    /* ···································································· */ 

    public function coloproctologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "coloproctologia";
        $pregunta->save();

        return redirect('/especialidades/coloproctologia');
    }

    public function coloproctologia_c(){
         $sql = DB::table('preguntas')->where('tipo','coloproctologia')->get();   
        return view('/especialidades/coloproctologia',compact('sql'));
    }

    
    /* ···································································· */ 



    /* ···································································· */ 

    public function gastroenterologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "gastroenterologia";
        $pregunta->save();

        return redirect('/especialidades/gastroenterologia');
    }

    public function gastroenterologia_c(){
         $sql = DB::table('preguntas')->where('tipo','gastroenterologia')->get();   
        return view('/especialidades/gastroenterologia',compact('sql'));
    }

    
    /* ···································································· */ 





    /* ···································································· */ 

    public function hematologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "hematologia";
        $pregunta->save();

        return redirect('/especialidades/hematologia');
    }

    public function hematologia_c(){
         $sql = DB::table('preguntas')->where('tipo','hematologia')->get();   
        return view('/especialidades/hematologia',compact('sql'));
    }

    
    /* ···································································· */ 



    /* ···································································· */ 

    public function medicinainterna(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "medicina interna";
        $pregunta->save();

        return redirect('/especialidades/medicinainterna');
    }

    public function medicinainterna_c(){
         $sql = DB::table('preguntas')->where('tipo','medicina interna')->get();   
        return view('/especialidades/medicinainterna',compact('sql'));
    }

    
    /* ···································································· */ 




    /* ···································································· */ 

    public function pediatria(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "pediatria";
        $pregunta->save();

        return redirect('/especialidades/pediatria');
    }

    public function pediatria_c(){
         $sql = DB::table('preguntas')->where('tipo','pediatria')->get();   
        return view('/especialidades/pediatria',compact('sql'));
    }

    
    /* ···································································· */ 





    /* ···································································· */ 

    public function podologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "podologia";
        $pregunta->save();

        return redirect('/especialidades/podologia');
    }

    public function podologia_c(){
         $sql = DB::table('preguntas')->where('tipo','podologia')->get();   
        return view('/especialidades/podologia',compact('sql'));
    }

    
    /* ···································································· */
    
    



    /* ···································································· */ 

    public function psiquiatria(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "psiquiatria";
        $pregunta->save();

        return redirect('/especialidades/psiquiatria');
    }

    public function psiquiatria_c(){
         $sql = DB::table('preguntas')->where('tipo','psiquiatria')->get();   
        return view('/especialidades/psiquiatria',compact('sql'));
    }

    
    /* ···································································· */





    /* ···································································· */ 

    public function neurofisiologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "neurofisiologia";
        $pregunta->save();

        return redirect('/especialidades/neurofisiologia');
    }

    public function neurofisiologia_c(){
         $sql = DB::table('preguntas')->where('tipo','neurofisiologia')->get();   
        return view('/especialidades/neurofisiologia',compact('sql'));
    }

    
    /* ···································································· */






    /* ···································································· */ 

    public function urologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "urologia";
        $pregunta->save();

        return redirect('/especialidades/urologia');
    }

    public function urologia_c(){
         $sql = DB::table('preguntas')->where('tipo','urologia')->get();   
        return view('/especialidades/urologia',compact('sql'));
    }

    
    /* ···································································· */






    /* ···································································· */ 

    public function ambulancia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "ambulancia";
        $pregunta->save();

        return redirect('/servicios_medicos/ambulancia');
    }

    public function ambulancia_c(){
         $sql = DB::table('preguntas')->where('tipo','ambulancia')->get();   
        return view('/servicios_medicos/ambulancia',compact('sql'));
    }

    
    /* ···································································· */





    /* ···································································· */ 

    public function resonancia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "resonancia rayosx";
        $pregunta->save();

        return redirect('/servicios_medicos/resonancias_rayosx');
    }

    public function resonancia_c(){
         $sql = DB::table('preguntas')->where('tipo','resonancia rayosx')->get();   
        return view('/servicios_medicos/resonancias_rayosx',compact('sql'));
    }

    
    /* ···································································· */







    /* ···································································· */ 

    public function ambulatorio(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "ambulatorio";
        $pregunta->save();

        return redirect('/servicios_medicos/ambulatorio');
    }

    public function ambulatorio_c(){
         $sql = DB::table('preguntas')->where('tipo','ambulatorio')->get();   
        return view('/servicios_medicos/ambulatorio',compact('sql'));
    }

    
    /* ···································································· */






    /* ···································································· */ 

    public function mapa_sitio(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "mapa del sitio";
        $pregunta->save();

        return redirect('/servicios_medicos/mapa_del_sitio');
    }

    public function mapa_sitio_c(){
         $sql = DB::table('preguntas')->where('tipo','mapa del sitio')->get();   
        return view('/servicios_medicos/mapa_del_sitio',compact('sql'));
    }

    
    /* ···································································· */






    /* ···································································· */ 

    public function primeros_auxilios(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "primeros auxilios";
        $pregunta->save();

        return redirect('/servicios_medicos/primeros_auxilios');
    }

    public function primeros_auxilios_c(){
         $sql = DB::table('preguntas')->where('tipo','primeros auxilios')->get();   
        return view('/servicios_medicos/primeros_auxilios',compact('sql'));
    }

    
    /* ···································································· */







    /* ···································································· */ 

    public function quirofano(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "quirofano";
        $pregunta->save();

        return redirect('/servicios_medicos/quirofano');
    }

    public function quirofano_c(){
         $sql = DB::table('preguntas')->where('tipo','quirofano')->get();   
        return view('/servicios_medicos/quirofano',compact('sql'));
    }

    
    /* ···································································· */






    /* ···································································· */ 

    public function reemplazos_articulares(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "reemplazos articulares";
        $pregunta->save();

        return redirect('/servicios_medicos/reemplazos_articulares');
    }

    public function reemplazos_c(){
         $sql = DB::table('preguntas')->where('tipo','reemplazos articulares')->get();   
        return view('/servicios_medicos/reemplazos_articulares',compact('sql'));
    }

    
    /* ···································································· */





    /* ···································································· */
    public function emergencia24(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "emergencia";
        $pregunta->save();

        return redirect('/servicios_medicos/emergencia24');
    }

    public function emergencia24_c(){
         $sql = DB::table('preguntas')->where('tipo','emergencia')->get();   
        return view('/servicios_medicos/emergencia24',compact('sql'));
    }

    
    /* ···································································· */





    /* ···································································· */
    public function directorio(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "directorio";
        $pregunta->save();

        return redirect('/servicios_medicos/directorio');
    }

    public function directorio_c(){
         $sql = DB::table('preguntas')->where('tipo','directorio')->get();   
        return view('/servicios_medicos/directorio',compact('sql'));
    }

    
    /* ···································································· */







    /* ···································································· */
    public function analgesia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "analgesia postoperatoria";
        $pregunta->save();

        return redirect('/servicios_medicos/analgesia_postoperatorias');
    }

    public function analgesia_c(){
         $sql = DB::table('preguntas')->where('tipo','analgesia postoperatoria')->get();   
        return view('/servicios_medicos/analgesia_postoperatorias',compact('sql'));
    }

    
    /* ···································································· */




    /* ···································································· */
    public function ecografia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "ecografia";
        $pregunta->save();

        return redirect('/servicios_medicos/ecografia');
    }

    public function ecografia_c(){
         $sql = DB::table('preguntas')->where('tipo','ecografia')->get();   
        return view('/servicios_medicos/analgesia',compact('sql'));
    }

    
    /* ···································································· */






    /* ···································································· */
    public function cuidados_intensivos(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "cuidados intensivos";
        $pregunta->save();

        return redirect('/servicios_medicos/cuidados_intensivos');
    }

    public function cuidados_intensivos_c(){
         $sql = DB::table('preguntas')->where('tipo','cuidados intensivos')->get();   
        return view('/servicios_medicos/cuidados_intensivos',compact('sql'));
    }

    
    /* ···································································· */



    /* ···································································· */
    public function imaginologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "imaginologia";
        $pregunta->save();

        return redirect('/servicios_medicos/imaginologia');
    }

    public function imaginologia_c(){
         $sql = DB::table('preguntas')->where('tipo','imaginologia')->get();   
        return view('/servicios_medicos/imaginologia',compact('sql'));
    }

    
    /* ···································································· */







    /* ···································································· */
    public function fisiatria(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "fisiatria";
        $pregunta->save();

        return redirect('/servicios_medicos/fisiatria');
    }

    public function fisiatria_c(){
         $sql = DB::table('preguntas')->where('tipo','fisiatria')->get();   
        return view('/servicios_medicos/fisiatria',compact('sql'));
    }

    
    /* ···································································· */




    /* ···································································· */
    public function farmacia_u(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "farmacia unidosis";
        $pregunta->save();

        return redirect('/servicios_medicos/farmacia_unidosis');
    }

    public function farmacia_u_c(){
         $sql = DB::table('preguntas')->where('tipo','farmacia unidosis')->get();   
        return view('/servicios_medicos/farmacia_unidosis',compact('sql'));
    }

    
    /* ···································································· */





    /* ···································································· */
    public function anatomia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "anatomia";
        $pregunta->save();

        return redirect('/servicios_medicos/anatomia_patologica');
    }

    public function anatomia_c(){
         $sql = DB::table('preguntas')->where('tipo','anatomia')->get();   
        return view('/servicios_medicos/anatomia_patologica',compact('sql'));
    }

    
    /* ···································································· */





    /* ···································································· */
    public function quimioterapia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "quimioterapia";
        $pregunta->save();

        return redirect('/servicios_medicos/quimioterapia');
    }

    public function quimioterapia_c(){
         $sql = DB::table('preguntas')->where('tipo','quimioterapia')->get();   
        return view('/servicios_medicos/quimioterapia',compact('sql'));
    }

    
    /* ···································································· */





    /* ···································································· */
    public function laboratorio_clinico(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "laboratorio medico";
        $pregunta->save();

        return redirect('/laboratorio/laboratorio_clinico');
    }

    public function laboratorio_clinico_c(){
         $sql = DB::table('preguntas')->where('tipo','laboratorio medico')->get();   
        return view('/laboratorio/laboratorio_clinico',compact('sql'));
    }

    
    /* ···································································· */




    /* ···································································· */
    
    public function solicitud_citas(Request $request){
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "solicitud de cita";
        $pregunta->save();

        return redirect('/solicitud_citas');
    }

    public function solicitud_citas_c(){
         $sql = DB::table('preguntas')->where('tipo','solicitud de cita')->get();   
        return view('/solicitud_citas',compact('sql'));
    }

    
    /* ···································································· */
        public function cirugia_plastica(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "cirugia_plastica";
        $pregunta->save();

        return redirect('/especialidades/cirugia_plastica');
    }

    public function cirugia_plastica_c(){
         $sql = DB::table('preguntas')->where('tipo','cirugia_plastica')->get();   
        return view('/especialidades/cirugia_plastica',compact('sql'));
    }
     /* ···································································· */
        public function reumatologia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "reumatologia";
        $pregunta->save();

        return redirect('/especialidades/reumatologia');
    }

    public function reumatologia_c(){
         $sql = DB::table('preguntas')->where('tipo','reumatologia')->get();   
        return view('/especialidades/reumatologia',compact('sql'));
    }

/* ···································································· */
        public function nutricion(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "nutricion";
        $pregunta->save();

        return redirect('/especialidades/nutricion');
    }

    public function nutricion_c(){
         $sql = DB::table('preguntas')->where('tipo','nutricion')->get();   
        return view('/especialidades/nutricion',compact('sql'));
    }

/* ···································································· */
        public function neurocirugia(Request $request){
        
        $pregunta = New Pregunta;

        $pregunta->pregunta = $request->input('pregunta');
        $pregunta->usuario = auth()->user()->name;
        $pregunta->tipo = "neurocirugia";
        $pregunta->save();

        return redirect('/especialidades/neurocirugia');
    }

    public function neurocirugia_c(){
         $sql = DB::table('preguntas')->where('tipo','neurocirugia')->get();   
        return view('/especialidades/neurocirugia',compact('sql'));
    }



}
 


?>