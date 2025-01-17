<?php namespace Beyazdish\Certificates\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishCertificatesMain extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_certificates_main', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_certificates_main', function($table)
        {
            $table->dropColumn('deleted_at');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
