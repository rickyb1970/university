<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sysusers', function (Blueprint $table) {
            $table->integer('userid')->primary()->unsigned();
            $table->string('username',40);
            $table->string('userpassword',100);
            $table->integer('uroleid');
            $table->foreign('uroleid')->references('roleid')->on('sysroles');

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
        Schema::drop('sysusers');
    }
}
