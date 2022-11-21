<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Basciu01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basciu01s', function (Blueprint $table) {
          $table->bigIncrements('id_ciudad');
          $table->foreignId('id_estado')->references('id_estado')->on('basest01s')->onDelete('cascade')->onUpdate('cascade');
          $table->string('ciudad');
          $table->string('capital');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
