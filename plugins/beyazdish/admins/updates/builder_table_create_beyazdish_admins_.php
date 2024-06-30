<?php namespace Beyazdish\Admins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishAdmins extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_admins_', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_admins_');
    }
}
