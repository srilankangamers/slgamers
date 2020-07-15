<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesTournaments12 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->string('organizer');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->dropColumn('organizer');
        });
    }
}
