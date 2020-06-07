<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesGamesTournaments extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_games_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('game_id');
            $table->integer('tournament_id');
            $table->primary(['game_id','tournament_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_games_tournaments');
    }
}
