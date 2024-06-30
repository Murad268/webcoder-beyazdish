<?php namespace Beyazdish\Customervideos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishCustomervideos extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_customervideos_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_customervideos_');
    }
}
