<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoryboxes5 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_categoryboxes', function($table)
        {
            $table->renameColumn('categoryboxes', 'category');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_categoryboxes', function($table)
        {
            $table->renameColumn('category', 'categoryboxes');
        });
    }
}
