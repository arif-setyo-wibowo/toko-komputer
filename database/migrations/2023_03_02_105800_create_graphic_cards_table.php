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
        Schema::create('graphic_cards', function (Blueprint $table) {
            $table->uuid('gpuId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands');
            $table->string('gpuName',255);
            $table->string('gpuInterface',255);
            $table->string('gpuBaseClock',255);
            $table->string('gpuBoostClock',255);
            $table->string('gpuMemoryClockSpeed',255);
            $table->string('gpuMemoryInterface',255);
            $table->string('gpuMemoryType',255);
            $table->string('gpuFeature',255);
            $table->string('gpuPowerReq',255);
            $table->string('gpuCaseSupport',255);
            $table->string('gpuWarranty',255);
            $table->string('gpuPrice', 255);
            $table->string('gpuStock', 255);
            $table->string('gpuImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graphic_cards');
    }
};
