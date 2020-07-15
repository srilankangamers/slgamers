<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesTournamentsMap extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_tournaments_map', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_tournaments_map');
    }
}
