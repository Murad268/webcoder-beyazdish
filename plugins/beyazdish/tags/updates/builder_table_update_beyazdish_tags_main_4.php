<?php namespace Beyazdish\Tags\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishTagsMain4 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->string('name', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->string('name', 10)->change();
        });
    }
}
