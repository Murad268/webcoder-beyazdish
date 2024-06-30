<?php namespace Beyazdish\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishGalleryMain7 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_gallery_main', function($table)
        {
            $table->integer('status')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_gallery_main', function($table)
        {
            $table->integer('status')->default(null)->change();
        });
    }
}
