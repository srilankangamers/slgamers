<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistration2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration', function($table)
        {
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration', function($table)
        {
            $table->text('slug');
        });
    }
}
