<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {            
            $table->increments('id_usuario');

            //$table->integer('id_tipo');

            $table->string('nombre',50);
            $table->string('apellido_p',50);
            $table->string('apellido_m',50);
            $table->string('telefono',14);
            $table->string('semestre',2);
            $table->string('email',100)->unique();
            $table->text('direccion',255);
            $table->string('codigo_postal',5);
            $table->string('localidad',100);
            $table->string('pais',50);
            $table->date('fecha_de_nacimiento');
            $table->text('password',255);
            $table->text('matricula',255);
            $table->text('foto',255);
            }); 
    }

    public function down()
    {
        Schema::drop('usuarios');
    }
}
