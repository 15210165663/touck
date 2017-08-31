<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_subscribe', function (Blueprint $table) {
            $table->increments('Subscribe_id');
            $table->integer('User_id');
            $table->integer('Long');
            $table->string('Leave');
            $table->integer('Static');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock_subscribe');
    }
}
