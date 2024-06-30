<?php namespace Beyazdish\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishTeamMain extends Migration
{
    public function up()
    {
        Schema::rename('beyazdish_team_', 'beyazdish_team_main');
    }
    
    public function down()
    {
        Schema::rename('beyazdish_team_main', 'beyazdish_team_');
    }
}
