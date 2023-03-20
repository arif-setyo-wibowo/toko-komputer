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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->uuid('voucherId')->primary();
            $table->string('voucherName',255);
            $table->string('voucherDateStart',255);
            $table->string('voucherDateEnd',255);
            $table->string('voucherCondition',255);
            $table->string('voucherCode',255);
            $table->string('voucherDiscount',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
