<?php namespace Beyazdish\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishGalleryMain4 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_gallery_main', function($table)
        {
            $table->renameColumn('tags_id', 'tag_id');
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_gallery_main', function($table)
        {
            $table->renameColumn('tag_id', 'tags_id');
        });
    }
}
