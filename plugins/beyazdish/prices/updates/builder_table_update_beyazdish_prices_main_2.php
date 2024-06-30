<?php namespace Beyazdish\Prices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishPricesMain2 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_prices_main', function($table)
        {
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('nest_depth')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_prices_main', function($table)
        {
            $table->dropColumn('nest_left');
            $table->dropColumn('nest_right');
            $table->dropColumn('parent_id');
            $table->dropColumn('nest_depth');
        });
    }
}
