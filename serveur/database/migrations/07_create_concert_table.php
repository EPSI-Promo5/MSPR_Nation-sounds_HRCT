<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('concert', function (Blueprint $table) {
            $table->id();
            $table->string('Groupe');
            $table->string('Duree');
            $table->dateTime('Horaire');
            $table->unsignedBigInteger('scene_id');
            $table->text('Descriptif');
            $table->unsignedBigInteger('Id_lieu')->nullable();
            $table->timestamps();

            $table->foreign('scene_id')->references('id')->on('scene');
        });
    }

    public function down()
    {
        Schema::dropIfExists('concerts');
    }
};
