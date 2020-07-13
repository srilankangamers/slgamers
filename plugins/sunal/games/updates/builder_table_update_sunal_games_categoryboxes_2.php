<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoryboxes2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_categoryboxes', function($table)
        {
            $table->renameColumn('category', 'categorybox');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_categoryboxes', function($table)
        {
            $table->renameColumn('categorybox', 'category');
        });
    }
}
