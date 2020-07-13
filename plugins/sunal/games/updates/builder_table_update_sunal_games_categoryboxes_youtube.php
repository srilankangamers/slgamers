<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoryboxesYoutube extends Migration
{
    public function up()
    {
        Schema::rename('sunal_games_categories_youtube', 'sunal_games_categoryboxes_youtube');
    }
    
    public function down()
    {
        Schema::rename('sunal_games_categoryboxes_youtube', 'sunal_games_categories_youtube');
    }
}
