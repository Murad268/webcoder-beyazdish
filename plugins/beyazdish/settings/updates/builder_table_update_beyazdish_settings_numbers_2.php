<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishSettingsNumbers2 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_settings_numbers', function($table)
        {
            $table->integer('on_contact_page')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_settings_numbers', function($table)
        {
            $table->dropColumn('on_contact_page');
        });
    }
}
