<?php namespace Beyazdish\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishServicesMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_services_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('service_parent_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('decription');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_services_main');
    }
}
