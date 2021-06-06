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
        Schema::create('Contacto',function(Blueprint $table){
            $table->id();
            $table->text('Descripcion');
            $table->date('Fecha_inicio');
            $table->date('Fecha_final');
            $table->string('Categoria_notificacion');
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
        Schema::dropIfExists('Contacto');
    }
}
