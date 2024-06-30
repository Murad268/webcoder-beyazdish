<?php namespace Beyazdish\Tags\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishTagsMain extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->string('title', 10)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_tags_main', function($table)
        {
            $table->integer('title')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
