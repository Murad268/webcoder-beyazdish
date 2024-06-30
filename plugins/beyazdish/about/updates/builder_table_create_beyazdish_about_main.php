<?php namespace Beyazdish\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishAboutMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_about_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('doctor_name')->nullable();
            $table->string('position')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_about_main');
    }
}
