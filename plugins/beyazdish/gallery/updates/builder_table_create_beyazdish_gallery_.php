<?php namespace Beyazdish\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishGallery extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_gallery_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('tag_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_gallery_');
    }
}
