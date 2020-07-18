<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistrationTournaments5 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->integer('tournament_id')->default(0)->change();
            $table->integer('register_id')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->integer('tournament_id')->default(null)->change();
            $table->integer('register_id')->default(null)->change();
        });
    }
}
