<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSunalGamesRegistrationTournaments2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('sunal_games_registration_tournaments');
    }
    
    public function down()
    {
        Schema::create('sunal_games_registration_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tourna_id')->unsigned();
            $table->integer('regist_id')->unsigned();
            $table->primary(['tourna_id','regist_id']);
        });
    }
}
