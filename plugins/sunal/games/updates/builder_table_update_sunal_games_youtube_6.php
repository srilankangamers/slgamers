<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesYoutube6 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_youtube', function($table)
        {
            $table->renameColumn('category', 'categorybox');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_youtube', function($table)
        {
            $table->renameColumn('categorybox', 'category');
        });
    }
}
