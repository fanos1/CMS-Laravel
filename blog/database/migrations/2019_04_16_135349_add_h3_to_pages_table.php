<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddH3ToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('pages', 'h2')) {
            // Check if the 'h2' Column exits, if it exist do nothing
        } else {
            
            Schema::table('pages', function (Blueprint $table) {
               $table->string('h2')->nullable(); 
            });
        }

        if(Schema::hasColumn('pages', 'h3')) {
            // Check if the 'h3' Column exits, if it exist do nothing
        } else {

             Schema::table('pages', function (Blueprint $table) {
               $table->string('h3')->nullable();
            });
        }

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('h2');
            $table->dropColumn('h3');
        });
    }
}
