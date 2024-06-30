<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishSettingsAddresses2 extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_settings_addresses', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_settings_addresses');
    }
}
