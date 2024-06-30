<?php namespace Beyazdish\Customervideos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishCustomervideosMain2 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_customervideos_main', function($table)
        {
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->integer('parent_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_customervideos_main', function($table)
        {
            $table->dropColumn('nest_left');
            $table->dropColumn('nest_right');
            $table->dropColumn('nest_depth');
            $table->dropColumn('parent_id');
        });
    }
}
