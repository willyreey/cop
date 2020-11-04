<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'nombres','apellidos','password','tipo_doc','numero_i','fecha_naci','lugar_naci','direccion','correo_p','rif',
        'tipo_poi','tipo_e','tipo_u','estatus'
    ];
} 

