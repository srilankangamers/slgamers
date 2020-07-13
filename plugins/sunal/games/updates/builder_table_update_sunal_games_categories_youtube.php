<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoriesYoutube extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_categories_youtube', function($table)
        {
            $table->integer('youtube_id')->unsigned()->change();
            $table->integer('category_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_categories_youtube', function($table)
        {
            $table->integer('youtube_id')->unsigned(false)->change();
            $table->integer('category_id')->unsigned(false)->change();
        });
    }
}
