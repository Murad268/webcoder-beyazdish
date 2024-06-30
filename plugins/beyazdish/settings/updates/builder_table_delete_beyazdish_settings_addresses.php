<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBeyazdishSettingsAddresses extends Migration
{
    public function up()
    {
        Schema::dropIfExists('beyazdish_settings_addresses');
    }
    
    public function down()
    {
        Schema::create('beyazdish_settings_addresses', function($table)
        {
            $table->integer('id');
            $table->text('title')->nullable();
        });
    }
}
