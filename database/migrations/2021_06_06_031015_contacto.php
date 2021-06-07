<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto',function(Blueprint $table){
            $table->integer('id_contacto');  // Integer Unsigned Increment
            $table->string('nombre', 255); //varchar
            $table->string('asunto', 255);   //varchar
            $table->string('mensaje', 255);    //varchar
            $table->string('email', 255);   //varchar
          });  
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
}
