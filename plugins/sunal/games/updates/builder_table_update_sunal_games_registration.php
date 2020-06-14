<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistration extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration', function($table)
        {
            $table->integer('contact');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration', function($table)
        {
            $table->dropColumn('contact');
        });
    }
}
