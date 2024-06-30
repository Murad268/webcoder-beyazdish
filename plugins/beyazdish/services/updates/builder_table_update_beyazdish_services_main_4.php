<?php namespace Beyazdish\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishServicesMain4 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_services_main', function($table)
        {
            $table->integer('status')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_services_main', function($table)
        {
            $table->integer('status')->default(null)->change();
        });
    }
}
