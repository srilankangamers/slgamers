<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGames extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('description');
            $table->text('platform');
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_');
    }
}
