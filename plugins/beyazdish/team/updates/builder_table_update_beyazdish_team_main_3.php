<?php namespace Beyazdish\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishTeamMain3 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_team_main', function($table)
        {
            $table->integer('status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_team_main', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
