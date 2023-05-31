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
        Schema::create('memories', function (Blueprint $table) {
            $table->uuid('memoryId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands')->onDelete('cascade');
            $table->string('memoryName',255);
            $table->string('memoryType',255);
            $table->string('memorySpeed',255);
            $table->string('memoryCapacity',255);
            $table->string('memoryCasLatency',255);
            $table->string('memoryVoltage',255);
            $table->string('memoryWarranty',255);
            $table->string('memoryPrice',255);
            $table->string('memoryStock',255);
            $table->string('memoryImage',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memories');
    }
};