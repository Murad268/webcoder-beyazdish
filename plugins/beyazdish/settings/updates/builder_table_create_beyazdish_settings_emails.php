<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishSettingsEmails extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_settings_emails', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('email')->nullable();
            $table->integer('on_navbar')->nullable();
            $table->integer('on_footer')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_settings_emails');
    }
}
