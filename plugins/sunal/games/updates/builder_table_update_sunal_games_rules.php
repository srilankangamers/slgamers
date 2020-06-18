<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRules extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_rules', function($table)
        {
            $table->text('gen_rules');
            $table->text('bans');
            $table->text('tec');
            $table->text('bank');
            $table->dropColumn('tournament_rules');
            $table->dropColumn('bank_details');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_rules', function($table)
        {
            $table->dropColumn('gen_rules');
            $table->dropColumn('bans');
            $table->dropColumn('tec');
            $table->dropColumn('bank');
            $table->text('tournament_rules');
            $table->text('bank_details');
        });
    }
}
