<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegisterTournaments extends Migration
{
    public function up()
    {
        Schema::rename('sunal_games_registration_tournaments', 'sunal_games_register_tournaments');
    }
    
    public function down()
    {
        Schema::rename('sunal_games_register_tournaments', 'sunal_games_registration_tournaments');
    }
}
