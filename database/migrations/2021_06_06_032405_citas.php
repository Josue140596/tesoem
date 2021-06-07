<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Citas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas',function(Blueprint $table){
            $table->integer('id_citas'); //integer unsigned increment
            $table->string('nombre',255); //varchar
            $table->date('fecha');  //date
            $table->datetime('hora');   //time
            $table->string('categoria',255);  //varchar
            $table->string('asunto',255);     //varchar

          }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
