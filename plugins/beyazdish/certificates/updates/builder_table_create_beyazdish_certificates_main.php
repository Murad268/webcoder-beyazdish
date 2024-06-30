<?php namespace Beyazdish\Certificates\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBeyazdishCertificatesMain extends Migration
{
    public function up()
    {
        Schema::create('beyazdish_certificates_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('beyazdish_certificates_main');
    }
}
