<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesYoutube extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_youtube', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('path');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_youtube');
    }
}
