<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSunalGamesRegistrationTournaments extends Migration
{
    public function up()
    {
        Schema::dropIfExists('sunal_games_registration_tournaments');
    }
    
    public function down()
    {
        Schema::create('sunal_games_registration_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('registration_id')->unsigned();
            $table->integer('tournament_id')->unsigned();
        });
    }
}
