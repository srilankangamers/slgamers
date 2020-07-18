<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistrationTournaments6 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->integer('tournament_id')->unsigned()->change();
            $table->integer('register_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->integer('tournament_id')->unsigned(false)->change();
            $table->integer('register_id')->unsigned(false)->change();
        });
    }
}
