<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersonasTable extends Migration
{
    public function up()
    {
        Schema::create('datos_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres', 100);
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50)->nullable();
            $table->date('fecha_nacimiento');
            $table->string('telefono', 15);
            $table->string('cedula', 10)->unique();
            $table->string('correo', 60)->unique();
            $table->unsignedBigInteger('promocion_id');
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('profesion_id');
            $table->string('especialidad', 100)->nullable();
            $table->string('ocupacion', 100)->nullable();
            $table->string('instagram', 60);
            $table->string('twitter', 60);
            $table->string('pais', 5);
            $table->string('estado', 100);
            $table->string('ciudad', 100)->nullable();
            $table->string('sector', 100)->nullable();
            $table->timestamps();

            //Foreing Key
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('promocion_id')->references('id')->on('promocions');
            $table->foreign('profesion_id')->references('id')->on('profesions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('datos_personas');
    }
}
