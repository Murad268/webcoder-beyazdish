<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishSettingsNumbers extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_settings_numbers', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('number')->nullable();
            $table->integer('on_navbar')->nullable();
            $table->integer('on_footer')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_settings_numbers');
    }
}
