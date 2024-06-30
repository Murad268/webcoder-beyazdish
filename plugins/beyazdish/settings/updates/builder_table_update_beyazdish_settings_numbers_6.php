<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishSettingsNumbers6 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_settings_numbers', function($table)
        {
            $table->integer('on_navbar')->default(0)->change();
            $table->integer('on_footer')->default(0)->change();
            $table->integer('on_contact_form')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_settings_numbers', function($table)
        {
            $table->integer('on_navbar')->default(null)->change();
            $table->integer('on_footer')->default(null)->change();
            $table->integer('on_contact_form')->default(null)->change();
        });
    }
}
