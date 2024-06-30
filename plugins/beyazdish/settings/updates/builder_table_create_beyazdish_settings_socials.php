<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishSettingsSocials extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_settings_socials', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('twitter_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_settings_socials');
    }
}
