<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishSettingsAddresses extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_settings_addresses', function($table)
        {
            $table->text('title')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_settings_addresses', function($table)
        {
            $table->text('title')->nullable(false)->change();
        });
    }
}
