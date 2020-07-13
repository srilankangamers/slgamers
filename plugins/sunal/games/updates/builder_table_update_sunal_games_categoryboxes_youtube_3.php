<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoryboxesYoutube3 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->renameColumn('categorybox_id', 'categoryboxes_id');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->renameColumn('categoryboxes_id', 'categorybox_id');
        });
    }
}
