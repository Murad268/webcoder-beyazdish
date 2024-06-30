<?php namespace Beyazdish\Blogs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishBlogsMain4 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_blogs_main', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_blogs_main', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
