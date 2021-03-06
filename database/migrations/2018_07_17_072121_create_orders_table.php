<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('goods_id')->unsigned();
            $table->integer('payment_methods_id')->unsigned();
            $table->integer('total_goods');
            $table->integer('total_price');
            $table->string('notes');
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

//            $table->foreign('payment_methods_id')
//                ->references('id')->on('payment_methods')
//                ->onDelete('cascade');


//            $table->foreign('goods_id')
//                ->references('id')->on('goods')
//                ->onDelete('cascade');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('goods');
        Schema::dropIfExists('payment_methods');
    }
}
