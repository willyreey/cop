<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->string('file')->nullable();
                $table->string('nombre');
                $table->string('apellido')->nullable();
                $table->string('direccion')->nullable();
                $table->integer('numero_telefonico')->nullable();
                $table->integer('numero_habitacion')->nullable();
                $table->string('email')->nullable();
                $table->string('primera_experiencia')->nullable();
                $table->string('segunda_experiencia')->nullable();
                $table->string('habilidades')->nullable();
                $table->string('ref_nombre')->nullable();
                $table->string('ref_apellido')->nullable();
                $table->string('ref_tlf')->nullable();
                $table->string('ref_dos_nombre')->nullable();
                $table->string('ref_dos_apellido')->nullable();
                $table->string('ref_dos_tlf')->nullable();
                $table->string('ref_tress_nombre')->nullable();
                $table->string('ref_tress_apellido')->nullable();
                $table->string('ref_tress_tlf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulacions');
    }
}
