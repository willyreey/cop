<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Mail;
use App\Mail\MensajeRecibido;
use DB;
use Alert;

class Registro extends Controller
{
     //
    public function registro_v(Request $request){
        
        
        $registro = new Usuario;
        
        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->fecha_naci =  $request->input('fecha_naci');
        $registro->lugar_naci =  $request->input('lugar_naci');
        $registro->direccion =  $request->input('direccion');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_poi =  $request->input('tipo_poi');
        $registro->tipo_e =  $request->input('tipo_e');
        $registro->tipo_u =  1;
        $registro->estatus =  'inactivo'; 
        
        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
  
    }



    public function registro_p(Request $request){
        
        $registro = new Usuario;

        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->lugar_naci =  $request->input('lugar_naci');
        $registro->direccion =  $request->input('direccion');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_poi =  $request->input('tipo_poi');
        $registro->tipo_e =  $request->input('tipo_e');
        $registro->tipo_u =  2;
        $registro->estatus =  'inactivo';
        
        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
  
    }
    

    public function registro_e(Request $request){
        
        $registro = new Usuario;

        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->direccion =  $request->input('direccion');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_u =  3;
        $registro->estatus =  'inactivo';

        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
    }

    public function registro_m(Request $request){
        
        $registro = new Usuario;

        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->direccion =  $request->input('direccion');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_u =  4;
        $registro->estatus =  'inactivo';

        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
    }

    public function registro_a(Request $request){
        
        $registro = new Usuario;

        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->direccion =  $request->input('direccion');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_u =  5;
        $registro->estatus =  'inactivo';

        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
    }

    public function registro_pw(Request $request){
        
        $registro = new Usuario;

        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->direccion =  $request->input('direccion');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_u =  6;
        $registro->estatus =  'inactivo';

        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
    }

    public function registro_pv(Request $request){
        
        $registro = new Usuario;

        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->direccion =  $request->input('direccion');
        $registro->rif =  $request->input('rif');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_u =  7;
        $registro->estatus =  'inactivo';

        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
    }

    public function registro_t(Request $request){
        
        $registro = new Usuario;

        $registro->nombres =  $request->input('nombres');
        $registro->apellidos =  $request->input('apellidos');
        $registro->pass =  md5( $request->input('password') );
        $registro->tipo_doc =  $request->input('tipo_doc');
        $registro->numero_i =  $request->input('numero_i');
        $registro->direccion =  $request->input('direccion');
        $registro->correo_p =  $request->input('correo_p');
        $registro->tipo_u =  8;
        $registro->estatus =  'inactivo';

        $sql = DB::table('usuarios')->select('nombres')->where('correo_p', '=' ,$registro->correo_p)->count();

        if($sql == 1){
            alert()->error('Correo ya registrado');
            return redirect('/registro');
        }
        else{
            $registro->save();
            Mail::to($registro->correo_p)->send(new MensajeRecibido);
            alert()->success('Registro Exitoso','Active su cuenta con el link que enviamos a su correo');
            return redirect('/registro');
        }
    }

    public function activar(Request $request){
        
        $registro = new Usuario;
        
        $cedula = $request->input('cedula');

        if( is_null($cedula) ){
            toast('No ha ingresado la cédula','error');
            return redirect('/activacion');
        }

        $sql = DB::table('usuarios')->select('numero_i')->where('numero_i',$cedula)->count();

        if($sql == 1){
            toast('Cuenta activada','success');
            DB::table('usuarios')
            ->where('numero_i', $cedula)
            ->update(['estatus' => 'activo']);
            return redirect('/');
        }
        else{
            toast('Cédula no registrada','error');
            return redirect('/activacion');

        }      
    }

    public function login(Request $request){
        
        $registro = new Usuario;
        
        $correo_p = $request->input('correo_p');
        $pass = md5( $request->input('pass') );
        
        if( is_null($correo_p) || is_null($pass) ){
            toast('No ha ingresado los datos','error');
            return redirect('/'); 
        }

        $sql = DB::table('usuarios')->select('correo_p','pass')->where('correo_p',$correo_p)->where('pass',$pass)->count();
        $sql2 = DB::table('usuarios')->select('estatus')->where('correo_p',$correo_p)->where('pass',$pass)->get();
        foreach ($sql2 as $dato) {
            $dato->estatus;

            if( $dato->estatus == 'inactivo' ){
                toast('Su cuenta no está activada','error');
                return redirect('/');            
            }

        } 
        
        if( $sql == 0 ){
            toast('Usuario no registrado','error');
            return redirect('/');
        }
        else

        if( $sql == 1 ){
            toast('Sesión Iniciada','success');
            return redirect('/');
        }

    }

}

?>