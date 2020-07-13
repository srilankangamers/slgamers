<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesCategoryboxes extends Migration
{
    public function up()
    {
        Schema::rename('sunal_games_categories', 'sunal_games_categoryboxes');
    }
    
    public function down()
    {
        Schema::rename('sunal_games_categoryboxes', 'sunal_games_categories');
    }
}
