<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id');
            $table->string('title');
            $table->string('release_year');
            $table->string('rated');
            $table->string('release_date_year');
            $table->string('runtime');
            $table->string('genre');
            $table->string('director');
            $table->string('writers');
            $table->string('actors');
            $table->text('plot');
            $table->string('language');
            $table->string('country');
            $table->string('awards');
            $table->string('poster');
            $table->string('imdb_rating');
            $table->string('rotten_tomatoes_rating');
            $table->string('metacritic_rating');
            $table->string('metascore');
            $table->string('imdbRating');
            $table->string('imdbVotes');
            $table->string('imdbID');
            $table->string('type');
            $table->string('dvd_release_date');
            $table->string('box_office');
            $table->string('production');
            $table->string('website');
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
        Schema::dropIfExists('movies_meta');
    }
}
