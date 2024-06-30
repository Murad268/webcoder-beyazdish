<?php namespace Beyazdish\Customervideos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishCustomervideosMain3 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_customervideos_main', function($table)
        {
            $table->integer('status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_customervideos_main', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
