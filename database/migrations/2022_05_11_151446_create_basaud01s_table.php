<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasaud01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basaud01s', function (Blueprint $table) {
            $table->id();
            $table->string('auditoria_id');
            $table->string('auditoria_type');
            $table->string('version_anterior');
            $table->string('modificacion_actual');
            $table->integer('creado_por');
            $table->integer('modificado_por')->nullable();
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
        Schema::dropIfExists('basaud01s');
    }
}
