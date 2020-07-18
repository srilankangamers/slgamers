<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRegistrationTournaments2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->integer('tour_id')->unsigned();
            $table->integer('reg_id')->unsigned();
            $table->dropColumn('tourn_id');
            $table->dropColumn('register_id');
            $table->primary(['tour_id','reg_id']);
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_registration_tournaments', function($table)
        {
            $table->dropPrimary(['tour_id','reg_id']);
            $table->dropColumn('tour_id');
            $table->dropColumn('reg_id');
            $table->integer('tourn_id')->unsigned();
            $table->integer('register_id')->unsigned();
        });
    }
}
