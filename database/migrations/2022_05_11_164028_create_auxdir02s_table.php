
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxdir02sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxdir02s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ciudad')->references('id_ciudad')->on('basciu01s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_urbanismo')->references('id_urbanismo')->on('basurb01s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nro_vivienda');
            $table->string('tipo_vivienda');
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
        Schema::dropIfExists('auxdir02s');
    }
}
