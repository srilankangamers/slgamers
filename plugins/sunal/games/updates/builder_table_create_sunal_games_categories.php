<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesCategories extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_categories');
    }
}
