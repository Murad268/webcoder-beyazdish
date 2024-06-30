<?php namespace Beyazdish\Blogs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishBlogsMain extends Migration
{
    public function up()
    {
        Schema::rename('beyazdish_blogs_', 'beyazdish_blogs_main');
        Schema::table('beyazdish_blogs_main', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::rename('beyazdish_blogs_main', 'beyazdish_blogs_');
        Schema::table('beyazdish_blogs_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
