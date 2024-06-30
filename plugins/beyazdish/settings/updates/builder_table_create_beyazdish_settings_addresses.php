<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishSettingsAddresses extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_settings_addresses', function($table)
        {
            $table->integer('id');
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_settings_addresses');
    }
}
