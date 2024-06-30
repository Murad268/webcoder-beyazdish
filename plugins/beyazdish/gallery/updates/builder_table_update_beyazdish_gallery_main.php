<?php namespace Beyazdish\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishGalleryMain extends Migration
{
    public function up()
    {
        Schema::rename('beyazdish_gallery_', 'beyazdish_gallery_main');
    }
    
    public function down()
    {
        Schema::rename('beyazdish_gallery_main', 'beyazdish_gallery_');
    }
}
