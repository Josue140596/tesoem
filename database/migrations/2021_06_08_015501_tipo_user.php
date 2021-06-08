<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoUser extends Migration
{
    public function up()
    {
        Schema::create('tipo_user', function (Blueprint $table) {            
            $table->increments('id_tipo');
            $table->text('tipo',255);
            }); 
    }

    public function down()
    {
        Schema::drop('tipo_user');
    }
}
