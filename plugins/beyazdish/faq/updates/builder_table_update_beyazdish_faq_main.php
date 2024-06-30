<?php namespace Beyazdish\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishFaqMain extends Migration
{
    public function up()
    {
        Schema::rename('beyazdish_faq_', 'beyazdish_faq_main');
        Schema::table('beyazdish_faq_main', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::rename('beyazdish_faq_main', 'beyazdish_faq_');
        Schema::table('beyazdish_faq_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
