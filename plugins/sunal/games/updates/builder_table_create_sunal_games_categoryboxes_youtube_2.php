<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesCategoryboxesYoutube2 extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('youtube_id');
            $table->primary(['youtube_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_categoryboxes_youtube');
    }
}
