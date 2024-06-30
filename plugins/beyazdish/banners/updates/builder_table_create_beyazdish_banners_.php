<?php namespace Beyazdish\Banners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishBanners extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_banners_', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_banners_');
    }
}
