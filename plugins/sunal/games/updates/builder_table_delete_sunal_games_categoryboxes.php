<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSunalGamesCategoryboxes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('sunal_games_categoryboxes');
    }
    
    public function down()
    {
        Schema::create('sunal_games_categoryboxes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category', 191)->nullable();
        });
    }
}
