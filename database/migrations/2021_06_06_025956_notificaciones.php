<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('notificaciones',function(Blueprint $table){
            $table->integer('id_notificacion'); //integer unsigned increment
            $table->text('descripcion',255); //varchar
            $table->date('fecha_inicio'); //date
            $table->date('fecha_final');    //date
            $table->string('categoria_notificacion',100);   //varchar
          });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}
