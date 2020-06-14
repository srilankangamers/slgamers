<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalGamesRegistration extends Migration
{
    public function up()
    {
        Schema::create('sunal_games_registration', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('ign');
            $table->text('game_id');
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_games_registration');
    }
}
