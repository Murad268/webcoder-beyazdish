<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishSettingsHours extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_settings_hours', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('every')->nullable();
            $table->text('saturday')->nullable();
            $table->text('sunday')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_settings_hours');
    }
}
