<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('payment_id')->nullable();
            $table->boolean('paid')->default(0);
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('user_addresses_id')->constrained('user_addresses');
            $table->string('logistic_id')->nullable();
            $table->string('user_cart_ids');
            $table->string('coupon_code')->nullable();
            $table->string('coupon_discount')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('order_number')->nullable();
            $table->string('cod_charge')->nullable();
            $table->string('total_payment');
            $table->string('gst_charge');
            $table->boolean('dispatch')->default(0);
            $table->boolean('delivered')->default(0);
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
        Schema::dropIfExists('orders');
    }
};
