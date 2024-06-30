<?php namespace Beyazdish\Tags\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishTagsMain3 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
}
