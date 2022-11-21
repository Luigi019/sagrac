<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Basmun01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basmun01s', function (Blueprint $table) {
            $table->bigIncrements('id_municipio');
            $table->foreignId('id_estado')->references('id_estado')->on('basest01s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('municipio');
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
