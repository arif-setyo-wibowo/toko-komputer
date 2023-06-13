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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('orderId')->primary();
            $table->foreignUuid('customerId')->references('customerId')->on('users')->onDelete('cascade');
            $table->date('orderDate',255);
            $table->string('orderTotalPrice',255);
            $table->string('orderResi',255)->nullable();
            $table->string('paymentId',255);
            $table->string('orderStatus',255)->nullable()->default("Unpaid");;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};