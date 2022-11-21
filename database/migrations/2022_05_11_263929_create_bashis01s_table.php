<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBashis01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bashis01s', function (Blueprint $table) {
            $table->id();
            $table->longText('planteamiento');
            $table->foreignId('citizen_id')->references('id')->on('auxciu02s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('direccion_id')->references('id')->on('auxdir02s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('queja_reclamo')->references('id')->on('auxcqr02s')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fecha_incidente');
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
        Schema::dropIfExists('bashis01s');
    }
}
