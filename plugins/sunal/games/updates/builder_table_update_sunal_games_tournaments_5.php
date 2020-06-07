<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesTournaments5 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->integer('first_place');
            $table->integer('second_place');
            $table->integer('third_place');
            $table->integer('four_to_ten');
            $table->dropColumn('1st_place');
            $table->dropColumn('2nd_place');
            $table->dropColumn('3rd_place');
            $table->dropColumn('4to10');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_tournaments', function($table)
        {
            $table->dropColumn('first_place');
            $table->dropColumn('second_place');
            $table->dropColumn('third_place');
            $table->dropColumn('four_to_ten');
            $table->integer('1st_place');
            $table->integer('2nd_place');
            $table->integer('3rd_place');
            $table->integer('4to10');
        });
    }
}
