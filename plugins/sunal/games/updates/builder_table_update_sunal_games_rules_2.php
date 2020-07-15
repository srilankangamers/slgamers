<?php namespace Sunal\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalGamesRules2 extends Migration
{
    public function up()
    {
        Schema::table('sunal_games_rules', function($table)
        {
            $table->text('bank_user_name');
            $table->text('bank_user_acc');
            $table->renameColumn('bank', 'bank_name');
        });
    }
    
    public function down()
    {
        Schema::table('sunal_games_rules', function($table)
        {
            $table->dropColumn('bank_user_name');
            $table->dropColumn('bank_user_acc');
            $table->renameColumn('bank_name', 'bank');
        });
    }
}
