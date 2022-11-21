<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baspar01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baspar01s', function (Blueprint $table) {
            $table->bigIncrements('id_parroquia');
            $table->foreignId('id_municipio')->references('id_municipio')->on('basmun01s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('parroquia');
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
