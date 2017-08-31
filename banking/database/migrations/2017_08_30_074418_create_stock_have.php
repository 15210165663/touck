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
        Schema::create('stock_market', function (Blueprint $table) {
            $table->increments('stock_id');
            $table->string('stock_name',33);
            $table->string('stock_img_url',33);
            $table->text('stock_text');
            $table->decimal('stock_price');
            $table->integer('stock_number');
            $table->integer('stock_sale');
            $table->integer('stock_type');
            $table->integer('firm_id');
            $table->integer('sort');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock_have');
    }
}
