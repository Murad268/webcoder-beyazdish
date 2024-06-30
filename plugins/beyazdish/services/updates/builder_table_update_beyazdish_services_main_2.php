<?php namespace Beyazdish\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishServicesMain2 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_services_main', function($table)
        {
            $table->integer('status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_services_main', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
