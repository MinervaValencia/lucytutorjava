<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temasdetalle', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_tema')->unsigned();
            $table->foreign('id_tema')->references('id')->on('temas');

            $table->integer('id_practica')->unsigned();
            $table->foreign('id_practica')->references('id')->on('practicas');

            $table->integer('orden'); /*secuencia de presentacion de los subtemas.*/

            $table->enum('tipo_subtema',['1','2','3']);/*1:Explicacion   2:Ejemplo   3:Practica*/

            $table->string('url');
            
            $table->string('label');
            
            $table->text('mensaje');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temasdetalle');
    }
}
