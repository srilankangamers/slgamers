<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistration3 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration', function($table)
        {
            $table->integer('tournament_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration', function($table)
        {
            $table->dropColumn('tournament_id');
        });
    }
}
