<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->uuid('orderDetailId')->primary();
            $table->foreignUuid('orderId')->references('orderId')->on('orders')->onDelete('cascade');
            $table->string('orderDetailProductId',255);
            $table->string('orderDetailProductPrice',255);
            $table->string('orderDetailProductQty',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};