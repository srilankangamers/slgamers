<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGames3 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_', function($table)
        {
            $table->text('status')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_', function($table)
        {
            $table->text('status')->nullable()->change();
        });
    }
}
