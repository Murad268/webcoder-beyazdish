<?php namespace Beyazdish\Tags\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishTagsMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_tags_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_tags_main');
    }
}
