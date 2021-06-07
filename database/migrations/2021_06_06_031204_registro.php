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
        Schema::create('Registro', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_de_usuario', 8);
            $table->string('nombre');
            $table->string('a_pat');
            $table->string('a_mat');
            $table->integer('telefono', 14);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('direccion', 255);
            $table->string('cod_postal', 5);
            $table->string('localidad');
            $table->string('pais');
            $table->string('semestre', 2);
            $table->date('fecha_nacimiento');
            $table->string('password');
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
