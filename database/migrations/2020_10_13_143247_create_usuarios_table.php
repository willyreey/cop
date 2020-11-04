<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('pass');
            $table->string('tipo_doc');
            $table->integer('numero_i');
            $table->date('fecha_naci')->nullable(); 
            $table->string('lugar_naci')->nullable();
            $table->string('direccion')->nullable();
            $table->string('correo_p');
            $table->integer('rif')->nullable();
            $table->string('tipo_poi')->nullable();
            $table->string('tipo_e')->nullable();
            $table->string('estatus');
            $table->integer('tipo_u');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
