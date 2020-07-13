<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesCategoryboxesYoutube extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_categoryboxes_youtube', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('categorybox_id');
            $table->primary(['categorybox_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_categoryboxes_youtube');
    }
}
