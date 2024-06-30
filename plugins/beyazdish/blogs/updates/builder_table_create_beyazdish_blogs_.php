<?php namespace Beyazdish\Blogs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishBlogs extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_blogs_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_blogs_');
    }
}
