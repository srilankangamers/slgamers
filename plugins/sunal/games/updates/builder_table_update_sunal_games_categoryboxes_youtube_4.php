<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoryboxesYoutube4 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->renameColumn('categorybox_id', 'category_id');
            $table->primary(['youtube_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->dropPrimary(['youtube_id','category_id']);
            $table->renameColumn('category_id', 'categorybox_id');
        });
    }
}
