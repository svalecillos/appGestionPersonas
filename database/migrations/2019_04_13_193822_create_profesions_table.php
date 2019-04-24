<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesionsTable extends Migration
{
    public function up()
    {
        Schema::create('profesions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 50);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesions');
    }
}
