<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSunalGamesCategoryboxesYoutube3 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('sunal_games_categoryboxes_youtube');
    }
    
    public function down()
    {
        Schema::create('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('categorybox_id');
            $table->integer('youtubes_id');
        });
    }
}
