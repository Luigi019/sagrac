<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Basurb01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basurb01s', function (Blueprint $table) {
            $table->bigIncrements('id_urbanismo');
            $table->foreignId('id_parroquia')->references('id_parroquia')->on('baspar01s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('urbanismo');
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
