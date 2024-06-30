<?php namespace Beyazdish\Prices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBeyazdishPricesMain extends Migration
{
    public function up()
    {
        Schema::table('beyazdish_prices_main', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('beyazdish_prices_main', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
