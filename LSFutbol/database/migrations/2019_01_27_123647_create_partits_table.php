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
        Schema::create('Partit', function (Blueprint $table) {
            $table->increments('IDpartit');
			$table->integer('temporada');
			$table->string('competicio');
			$table->integer('golslocal');
			$table->integer('golsvisitant');
			$table->integer('IDequip_local')->unsigned();
			$table->foreign('IDequip_local')->references('IDequip')->on('Equipo');
            $table->integer('IDequip_visitant')->unsigned();
            $table->foreign('IDequip_visitant')->references('IDequip')->on('Equipo');
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
