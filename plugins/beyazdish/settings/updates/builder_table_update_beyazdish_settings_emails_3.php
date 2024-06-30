<?php namespace Beyazdish\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishSettingsEmails3 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_settings_emails', function($table)
        {
            $table->integer('on_contact_form')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_settings_emails', function($table)
        {
            $table->dropColumn('on_contact_form');
        });
    }
}