<?php namespace Beyazdish\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishFaqMain3 extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_faq_main', function($table)
        {
            $table->integer('status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_faq_main', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
