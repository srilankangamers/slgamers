<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesTournaments11 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->string('winners')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->dropColumn('winners');
        });
    }
}
