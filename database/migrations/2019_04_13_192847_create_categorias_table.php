<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 100);
            $table->boolean('status')->default(true)	;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
