<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partits', function (Blueprint $table) {
            $table->increments('IDpartit');
            $table->integer('temporada');
            $table->string('competicio');
            $table->integer('golslocal');
            $table->integer('golsvisitant');
            $table->unsignedInteger('IDequip_local');
            $table->foreign('IDequip_local')->references('IDequip')->on('equips');
            $table->unsignedInteger('IDequip_visitant');
            $table->foreign('IDequip_visitant')->references('IDequip')->on('equips');
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
        Schema::dropIfExists('partits');
    }
}
