<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_tema')->unsigned();
            $table->foreign('id_tema')->references('id')->on('temas');
            
            /*1:Drag&drop 2:Codigo  3:Drag&drop con opciones*/
            $table->enum('interfaz', ['1','2','3']);
            $table->text('encomienda');
            $table->text('pista_default');
            $table->string('elementos_totales'); /*Todas las opciones que deben aparecerle al usuario correspondientes al ejemplo para que de entre todas el seleccione las que considere correctas. (se usa en la interfaz 3)*/

            $table->string('secuencia_inicial');    /*La secuencia en la que aparecen los elementos mostrados al usuario. (se usa en la interfaz 1)*/

            $table->string('secuencia_correcta');    /*Secuencia correcta. (se usa en la interfaz 1 y 3)*/

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
        Schema::dropIfExists('practicas');
    }
}
