<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'pregunta','tipo'
    ];
} 

