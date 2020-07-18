<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistrationTournaments3 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->renameColumn('reg_id', 'register_id');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->renameColumn('register_id', 'reg_id');
        });
    }
}
