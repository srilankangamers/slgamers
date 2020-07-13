<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSunalGamesYoutube extends Migration
{
    public function up()
    {
        Schema::dropIfExists('sunal_games_youtube');
    }
    
    public function down()
    {
        Schema::create('sunal_games_youtube', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('path', 191);
            $table->string('game', 191);
            $table->string('slug', 191);
            $table->string('title', 191);
        });
    }
}
