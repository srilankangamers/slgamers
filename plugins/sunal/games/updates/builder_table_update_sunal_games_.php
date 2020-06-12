<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGames extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_', function($table)
        {
            $table->text('status');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
