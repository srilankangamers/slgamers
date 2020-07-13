<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesCategories2 extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('category');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_categories');
    }
}
