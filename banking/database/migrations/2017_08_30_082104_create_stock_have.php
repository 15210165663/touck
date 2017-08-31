<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockHave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_master', function (Blueprint $table) {
            $table->increments('master_id');
            $table->string('master_name');
            $table->integer('admin_id');
            $table->integer('master_suffer');
            $table->integer('master_phone');
            $table->string('master_email');
            $table->text('master_text');
            $table->text('master_static');
            $table->string('master_img');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock_master');
    }
}
