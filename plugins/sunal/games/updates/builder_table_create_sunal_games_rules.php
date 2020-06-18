<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesRules extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_rules', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('game_rules');
            $table->text('tournament_rules');
            $table->text('bank_details');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_rules');
    }
}
