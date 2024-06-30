<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishSettingsMain2 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_settings_main', function($table)
        {
            $table->text('copyright_text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_settings_main', function($table)
        {
            $table->dropColumn('copyright_text');
        });
    }
}
