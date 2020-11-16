<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() { 
        Schema::table('users', function($table) { 
            $table->string('apellidos')->nullable();
            $table->string('tipo_doc')->nullable();
            $table->integer('numero_i')->nullable();
            $table->date('fecha_naci')->nullable(); 
            $table->string('lugar_naci')->nullable();
            $table->string('direccion')->nullable();
            $table->string('n_rif')->nullable();
            $table->string('tipo_poi')->nullable();
            $table->string('tipo_e')->nullable();
            $table->integer('tipo_u')->nullable();

    }); 
}

public function down() { 
        Schema::table('users', function($table) { 
            $table->dropColumn('apellidos')->nullable();
            $table->dropColumn('tipo_doc')->nullable();
            $table->dropColumn('numero_i')->nullable();
            $table->dropColumn('fecha_naci')->nullable(); 
            $table->dropColumn('lugar_naci')->nullable();
            $table->dropColumn('direccion')->nullable();
            $table->dropColumn('n_rif')->nullable();
            $table->dropColumn('tipo_poi')->nullable();
            $table->dropColumn('tipo_e')->nullable();
            $table->dropColumn('tipo_u')->nullable();
    });
    }
}
