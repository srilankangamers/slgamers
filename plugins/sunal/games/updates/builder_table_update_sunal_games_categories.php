<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategories extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_categories', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_categories', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
