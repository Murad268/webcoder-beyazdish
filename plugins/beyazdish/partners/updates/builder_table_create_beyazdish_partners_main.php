<?php namespace Beyazdish\Partners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishPartnersMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_partners_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_partners_main');
    }
}
