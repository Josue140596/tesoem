<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro',function(Blueprint $table){
<<<<<<< HEAD
            $table->integer('id_usuario'); //integer unsigned increment
=======
            $table->id(); //autoincrementable
>>>>>>> 2c49ce74bc88b141247f3cfffd5e2b7f3c020a45
            $table->string('tipo_de_usuario',15);   //varchar
            $table->string('nombre',50);   //varchar
            $table->string('apellido_p',50);    //varchar
            $table->string('apellido_m',50);    //varchar
            $table->string('telefono',14); //varchar
            $table->string('email',100)->unique();    //varchar
            $table->string('direccion',255);    //varchar
            $table->string('codigo_postal',5);  //varchar
            $table->string('localidad',100);    //varchar
            $table->string('pais',50);  //varchar
            $table->integer('semestre',2);  //integer
            $table->date('fecha_de_nacimiento');    //date
            $table->string('password',255); //varchar
            $table->string('foto',255); //varchar
<<<<<<< HEAD
            });  
=======
        });  
>>>>>>> 2c49ce74bc88b141247f3cfffd5e2b7f3c020a45
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
}
