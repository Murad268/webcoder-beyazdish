<?php namespace Beyazdish\Blogs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishBlogsMain3 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_blogs_main', function($table)
        {
            $table->integer('status')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_blogs_main', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
