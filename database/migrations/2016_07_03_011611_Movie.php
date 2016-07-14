<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('genres', function (Blueprint $table)
      {
        $table->increments('id');
        $table->string('name');
        $table->string('cast');
        $table->string('direccion');
        $table->timestamps();
        $table->integer('genre_id')->unsigned();
        $table->foreign('genre_id')->references('id')->on('genres');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
