<?php namespace Beyazdish\Banners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishBannersMain extends Migration
{
    public function up()
    {
        Schema::rename('beyazdish_banners_', 'beyazdish_banners_main');
    }
    
    public function down()
    {
        Schema::rename('beyazdish_banners_main', 'beyazdish_banners_');
    }
}
