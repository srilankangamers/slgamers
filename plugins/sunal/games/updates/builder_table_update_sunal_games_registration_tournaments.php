<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistrationTournaments extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->integer('tourna_id')->unsigned();
            $table->integer('regist_id')->unsigned();
            $table->dropColumn('tournament_id');
            $table->dropColumn('registration_id');
            $table->primary(['tourna_id','regist_id']);
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->dropPrimary(['tourna_id','regist_id']);
            $table->dropColumn('tourna_id');
            $table->dropColumn('regist_id');
            $table->integer('tournament_id')->unsigned();
            $table->integer('registration_id')->unsigned();
        });
    }
}
