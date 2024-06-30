<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishSettingsMain extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_settings_main', function($table)
        {
            $table->text('map')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_settings_main', function($table)
        {
            $table->dropColumn('map');
        });
    }
}
