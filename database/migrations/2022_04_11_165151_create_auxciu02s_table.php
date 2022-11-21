<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxciu02sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxciu02s', function (Blueprint $table) {
            $table->id();
            // $table->string('ciudadano_id');
            // $table->string('ciudadano_type');
            $table->string('nombre_ciudadano');                 
            $table->string('apellido_ciudadano');                 
            $table->string('cedula_ciudadano');                 
            $table->string('correo_ciudadano');                 
            $table->string('nacionalidad_ciudadano');                 
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
        Schema::dropIfExists('auxciu02s');
    }
}
