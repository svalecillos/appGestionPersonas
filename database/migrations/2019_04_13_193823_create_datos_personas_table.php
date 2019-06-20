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
            $table->string('cedula', 10)->unique();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('apodos', 100)->nullable();
            $table->string('nombres', 100);
            $table->string('primer_apellido', 50)->nullable();
            $table->string('segundo_apellido', 50)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('correo', 60)->unique()->nullable();
            $table->unsignedBigInteger('promocion_id')->nullable();
            $table->string('fecha_ingreso')->nullable();
            $table->string('fecha_egreso')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('nivel_academico_id')->nullable();
            $table->unsignedBigInteger('profesion_id')->nullable();
            $table->string('especialidad', 100)->nullable();
            $table->string('ocupacion', 100)->nullable();
            $table->string('instagram', 60)->nullable();
            $table->string('twitter', 60)->nullable();
            $table->string('cod_pais',10)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('sector', 100)->nullable();
            $table->timestamps();

            //Foreing Key
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('promocion_id')->references('id')->on('promocions');
            $table->foreign('profesion_id')->references('id')->on('profesions');
            $table->foreign('nivel_academico_id')->references('id')->on('nivel_academicos');
            $table->foreign('cod_pais')->references('codigo')->on('pais');
        });
    }

    public function down()
    {
        Schema::dropIfExists('datos_personas');
    }
}
