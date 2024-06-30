<?php namespace Beyazdish\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishGalleryMain6 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_gallery_main', function($table)
        {
            $table->integer('status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_gallery_main', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
