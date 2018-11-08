<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultValueMoviesMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('movies_meta', function (Blueprint $table) {
            $table->string('title')->nullable->change();
            $table->string('release_year')->nullable->change();
            $table->string('rated')->nullable->change();
            $table->string('release_date_year')->nullable->change();
            $table->string('runtime')->nullable->change();
            $table->string('genre')->nullable->change();
            $table->string('director')->nullable->change();
            $table->string('writers')->nullable->change();
            $table->string('actors')->nullable->change();
            $table->text('plot')->nullable->change();
            $table->string('language')->nullable->change();
            $table->string('country')->nullable->change();
            $table->string('awards')->nullable->change();
            $table->string('poster')->nullable->change();
            $table->string('imdb_rating')->nullable->change();
            $table->string('rotten_tomatoes_rating')->nullable->change();
            $table->string('metacritic_rating')->nullable->change();
            $table->string('metascore')->nullable->change();
            $table->string('imdbRating')->nullable->change();
            $table->string('imdbVotes')->nullable->change();
            $table->string('imdbID')->nullable->change();
            $table->string('type')->nullable->change();
            $table->string('dvd_release_date')->nullable->change();
            $table->string('box_office')->nullable->change();
            $table->string('production')->nullable->change();
            $table->string('website')->nullable->change();
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
