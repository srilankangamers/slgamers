<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoryboxesYoutube2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->dropColumn('categorybox_id');
            $table->primary(['youtube_id']);
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->dropPrimary(['youtube_id']);
            $table->integer('categorybox_id');
        });
    }
}
