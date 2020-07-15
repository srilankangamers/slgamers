<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesMapTournaments extends Migration
{
    public function up()
    {
        Schema::rename('sunal_games_tournaments_map', 'sunal_games_map_tournaments');
        Schema::table('sunal_games_map_tournaments', function($table)
        {
            $table->integer('tournament_id')->unsigned();
            $table->integer('map_id')->unsigned();
            $table->dropColumn('id');
            $table->dropColumn('name');
            $table->primary(['tournament_id','map_id']);
        });
    }
    
    public function down()
    {
        Schema::rename('sunal_games_map_tournaments', 'sunal_games_tournaments_map');
        Schema::table('sunal_games_tournaments_map', function($table)
        {
            $table->dropPrimary(['tournament_id','map_id']);
            $table->dropColumn('tournament_id');
            $table->dropColumn('map_id');
            $table->increments('id')->unsigned();
            $table->string('name', 191);
        });
    }
}
