<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesTournaments extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->text('platform');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->dropColumn('platform');
        });
    }
}
