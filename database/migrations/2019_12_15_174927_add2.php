<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses',function($table){
            $table->string('course_name');
            $table->string('university');
            $table->string('faculty');
            $table->integer('credits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses',function($table){
            $table->dropColumn('course_name');
            $table->dropColumn('university');
            $table->dropColumn('faculty');
            $table->dropColumn('credits');
        });
    }
}
