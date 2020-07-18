<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesRegistrationTournaments extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_registration_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tournament_id')->unsigned();
            $table->primary(['tournament_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_registration_tournaments');
    }
}
