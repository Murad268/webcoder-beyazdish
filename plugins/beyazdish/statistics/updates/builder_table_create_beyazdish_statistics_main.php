<?php namespace Beyazdish\Statistics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishStatisticsMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_statistics_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('count')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_statistics_main');
    }
}
