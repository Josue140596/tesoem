<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comentarios extends Migration
{
    
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_comentario');
            

            
            $table->text('comentario',255);
            });
    }

    public function down()
    {
        Schema::drop('comentarios');
    }
}
