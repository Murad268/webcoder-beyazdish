<?php namespace Beyazdish\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishPartnersMain2 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_partners_main', function($table)
        {
            $table->integer('parent_id')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->integer('nest_right')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_partners_main', function($table)
        {
            $table->dropColumn('parent_id');
            $table->dropColumn('nest_left');
            $table->dropColumn('nest_depth');
            $table->dropColumn('nest_right');
        });
    }
}
