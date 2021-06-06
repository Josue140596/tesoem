<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Registro',function(Blueprint $table){
            $table->id();
            $table->string('Tipo_de_usuario');
            $table->string('Nombre');
            $table->string('Apellido_P');
            $table->string('Apellido_M');
            $table->integer('Telefono');
            $table->string('Email');
            $table->string('Direccion');
            $table->string('Codigo_postal');
            $table->string('Localidad');
            $table->string('Pais');
            $table->string('Semestre');
            $table->date('Fecha_de_nacimiento');
            $table->string('Password');
          });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Registro');
    }
}
