<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Mail\PostulacionMail;
use App\Postulacion as Postulacion;
use Alert;
use Mail;
use PDF;

class PostulacionController extends Controller
{
    public function store(Request $request)
{

            $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:jpg,jpeg,bmp,png|max:3072',
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'numero_telefonico' => 'required|min:10',
            'numero_habitacion' => 'required|min:10',
            'email' => 'required',
            'habilidades' => 'required',
            'ref_nombre' => 'required',
            'ref_apellido' => 'required',
            'ref_telefono' => 'required',
            
        ]);

        if ($validator->fails()) {
            alert()->error('Falló el envio de la Postulación','Debe enviar una imagen (jpg,jpeg,bmp o png) menor a 3MB y completar todos los campos marcados con *');
        return redirect('/');
                        
        }
    
       $file = $request->file('file');
       $name = $request->input('nombre');
       $apellido = $request->input('apellido');
       $direccion = $request->input('direccion');
       $numero_telefonico = $request->input('numero_telefonico');
       $numero_habitacion = $request->input('numero_habitacion');
       $email = $request->input('email');
       $primera_experiencia = $request->input('primera_experiencia');
       $segunda_experiencia = $request->input('segunda_experiencia');
       $habilidades = $request->input('habilidades');
       $ref_nombre = $request->input('ref_nombre');
       $ref_apellido = $request->input('ref_apellido');
       $ref_telefono = $request->input('ref_telefono');
       $ref_dos_nombre = $request->input('ref_dos_nombre');
       $ref_dos_apellido = $request->input('ref_dos_apellido');
       $ref_dos_telefono = $request->input('ref_dos_telefono');
       $ref_tress_nombre = $request->input('ref_tress_nombre');
       $ref_tress_apellido = $request->input('ref_tress_apellido');
       $ref_tress_telefono = $request->input('ref_tress_telefono');

       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
       	// Convertimos en PDF
        $pdf = PDF::loadView('pdf', compact('nombre', 'name', 'apellido', 'direccion', 'numero_telefonico', 'numero_habitacion', 'email', 'primera_experiencia', 'segunda_experiencia', 'habilidades', 'ref_nombre', 'ref_apellido', 'ref_telefono', 'ref_dos_nombre', 'ref_dos_apellido', 'ref_dos_telefono', 'ref_tress_nombre', 'ref_tress_apellido', 'ref_tress_telefono'));
        
        $output = $pdf->output();
        
        Mail::to('willy.rey.luque@gmail.com')->send(new PostulacionMail($nombre, $name, $apellido, $direccion, $numero_telefonico, $numero_habitacion, $email, $primera_experiencia, $segunda_experiencia, $habilidades, $ref_nombre, $ref_apellido, $ref_telefono, $ref_dos_nombre, $ref_dos_apellido, $ref_dos_telefono, $ref_tress_nombre, $ref_tress_apellido, $ref_tress_telefono, $output));

        alert()->success('Postulacion Enviada con Exitó','Pronto nos comunicaremos son usted.');
        return redirect('/');

}
}


       
