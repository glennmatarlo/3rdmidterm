<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prod_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('tot_price');
            $table->timestamps();
            $table->foreign('prod_id')->references('id')->on('products')->onDelete("CASCADE");
            $table->foreign('user_id')->references('id')->on('users')->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
