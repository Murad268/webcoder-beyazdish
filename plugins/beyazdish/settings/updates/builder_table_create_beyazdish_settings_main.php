<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishSettingsMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_settings_main', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_settings_main');
    }
}
