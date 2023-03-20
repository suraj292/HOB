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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained('product_categories')->onDelete('cascade');
            $table->foreignId('product_sub_category_id')->constrained('product_sub_categories')->onDelete('cascade');
            $table->string('title');
            $table->string('size');
            $table->string('description');
            $table->longText('specification');
            $table->decimal('price', 8, 2);
            $table->decimal('offer_price', 8, 2)->nullable();
            $table->string('gender');
            $table->char('tags')->nullable();
            $table->boolean('sale')->nullable()->default(0);
            $table->boolean('italian')->nullable()->default(0);
            $table->boolean('return')->nullable()->default(0);
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
        Schema::dropIfExists('products');
    }
};
