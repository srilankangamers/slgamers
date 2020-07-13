<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesYoutube2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_youtube', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_youtube', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
