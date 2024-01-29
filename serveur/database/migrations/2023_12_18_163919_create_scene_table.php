<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSceneTable extends Migration
{
    public function up()
    {
        Schema::create('scene', function (Blueprint $table) {
            $table->id();
            $table->string('Nom', 191);
            $table->string('Type', 191);
            $table->unsignedBigInteger('Id_lieu');
            $table->foreign('Id_lieu')->references('id')->on('lieu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scene');
    }
}

