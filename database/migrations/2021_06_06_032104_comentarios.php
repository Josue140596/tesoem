<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios',function(Blueprint $table){
            $table->integer('id_comentario'); //integer unsigned increment
            $table->string('id_usuario')->unsigneded();    //varchar, la longitud no se asigna porque es una llave foranea       
            $table->foreign('id_usuario')->references('id')->on('registro'); //Asignando la llave foranea
            $table->string('comentario');   //varchar
          });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
