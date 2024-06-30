<?php namespace Beyazdish\Prices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishPricesMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_prices_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('price')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_prices_main');
    }
}
