<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesCategoriesYoutube2 extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_categories_youtube', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('youtube_id');
            $table->integer('category_id');
            $table->primary(['youtube_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_categories_youtube');
    }
}
