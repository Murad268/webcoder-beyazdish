<?php namespace Beyazdish\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishFaq extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_faq_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('question')->nullable();
            $table->text('answer')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_faq_');
    }
}
