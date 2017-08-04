<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('studentid',20)->primary();
            $table->string('studentfname',140);
            $table->string('studentmname',140)->nullable();
            $table->string('studentlname',140);
            $table->string('studentyear',4);
            $table->string('sprogramid',5)->index('program');
            $table->foreign('sprogramid')->references('programid')->on('programs');
            $table->string('scollegeid',5)->index('college');
            $table->foreign('scollegeid')->references('collegeid')->on('colleges');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
