<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Citas extends Migration
{

    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {            
            $table->increments('id_cita');
            $table->text('nombre',255);
            $table->date('fecha');
            $table->dateTime('hora');
            $table->text('categoria',255);
            $table->text('asunto',255);
            });
    }


    public function down()
    {
        Schema::drop('citas');
    }
}
