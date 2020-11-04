<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
   protected $fillable = ['nombre','apellido','direccion','numero_telefonico','numero_habitacion','email','primera_experiencia','segunda_experiencia','habilidades','ref_nombre','ref_apellido','ref_tlf','ref_dos_nombre','ref_dos_apellido','ref_dos_tlf','ref_tress_nombre','ref_tress_apellido','ref_tress_tlf'];

   public $timestamps = false;
}

              
     