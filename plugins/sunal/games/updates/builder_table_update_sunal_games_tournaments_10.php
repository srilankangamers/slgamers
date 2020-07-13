<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesTournaments10 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->string('type');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
