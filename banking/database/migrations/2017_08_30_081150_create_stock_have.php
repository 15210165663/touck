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
        Schema::create('stock_information', function (Blueprint $table) {
            $table->increments('information_id');
            $table->string('company_name'); 
            $table->string('principal');
            $table->integer('principal_phone');
            $table->string('email');
            $table->string('address');
            $table->integer('firm_id');
            $table->integer('static');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock_information');
    }
}
