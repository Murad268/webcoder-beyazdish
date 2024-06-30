<?php namespace Beyazdish\Tags\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishTagsMain2 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->integer('gallery_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->dropColumn('gallery_id');
        });
    }
}
