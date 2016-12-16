    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_tema_padre')->unsigned(); //Me faltó poner que acepte null y lo modifiqué dierecto en la tabla no por migración.
            $table->foreign('id_tema_padre')->references('id')->on('temas');
            
            $table->string('titulo');
            $table->integer('orden');
            $table->text('objetivo');
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
        Schema::dropIfExists('temas');
    }
}
