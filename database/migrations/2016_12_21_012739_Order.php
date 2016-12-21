<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Order', function (Blueprint $table) {
          $table->increments('order_id')->unique();
          $table->integer('user_id');
          $table->integer('id');
          $table->string('name');
          $table->dateTime('order_day');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('Order');
    }
}
