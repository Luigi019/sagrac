<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnQuejaIdToBasqyr01s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basqyr01s', function (Blueprint $table) {
            $table->foreignId('queja_id')->references('id')->on('auxcqr02s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basqyr01s', function (Blueprint $table) {
            $table->dropIndex('queja_id');
        });
    }
}
