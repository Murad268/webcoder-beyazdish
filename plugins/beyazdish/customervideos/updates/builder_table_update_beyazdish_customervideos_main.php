<?php namespace Beyazdish\Customervideos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishCustomervideosMain extends Migration
{
    public function up()
    {
        Schema::rename('beyazdish_customervideos_', 'beyazdish_customervideos_main');
    }
    
    public function down()
    {
        Schema::rename('beyazdish_customervideos_main', 'beyazdish_customervideos_');
    }
}
