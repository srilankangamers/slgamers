<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesTournaments extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->string('description');
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_tournaments');
    }
}
