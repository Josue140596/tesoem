<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notificaciones extends Migration
{

    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {            
            $table->increments('id_notificacion');            
            $table->text('descripcion',255);
            $table->date('fecha_inicio');
            $table->date('fecha_final');

            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')
            ->references('id_categoria')->on('categorias_notificaciones');

            $table->text('imagen_referencial',255);            
            }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notificaciones');
    }
}
