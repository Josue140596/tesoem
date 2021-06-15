<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carreras extends Migration
{

    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {            
            $table->increments('id_carrera');
            $table->String('carrera',50);
            }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carreras');
    }
}
