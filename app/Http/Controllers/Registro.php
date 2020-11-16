<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\User;
use Mail;
use Alert;
use App\Mail\MensajeRecibido;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Registro extends Controller
{
     //
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest');
    }

    
        protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tipo_doc' => ['required', 'string', 'max:255'],
            'numero_i' => ['string', 'min:6'],
            'fecha_naci' => ['string', 'max:100'],
            'lugar_naci' => ['string', 'max:255'], 
            'direccion' => ['required', 'string', 'max:255'],
            'n_rif' => ['string', 'min:8'], 
            'tipo_poi' => ['max:255'],
            'tipo_e' => ['string', 'max:255'],
            'tipo_u' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo_doc' => $data['tipo_doc'],
            'numero_i' => $data['numero_i'],
            'fecha_naci' => $data['fecha_naci'],
            'lugar_naci' => $data['lugar_naci'],
            'direccion' => $data['direccion'],
            'n_rif' => $data['n_rif'],
            'tipo_poi' => $data['tipo_poi'],
            'tipo_e' => $data['tipo_e'],
            'tipo_u' => $data['tipo_u'],
        ]);
    }
}
