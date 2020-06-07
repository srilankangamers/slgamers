<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesTournaments3 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->text('end_date');
            $table->integer('1st_place');
            $table->integer('2nd_place');
            $table->integer('3rd_place');
            $table->integer('4to10');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->dropColumn('end_date');
            $table->dropColumn('1st_place');
            $table->dropColumn('2nd_place');
            $table->dropColumn('3rd_place');
            $table->dropColumn('4to10');
        });
    }
}
