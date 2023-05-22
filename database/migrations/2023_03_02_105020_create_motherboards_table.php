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
        Schema::create('motherboards', function (Blueprint $table) {
            $table->uuid('moboId')->primary();
            $table->foreignUuid('processorSocketId')->references('processorSocketId')->on('processor_sockets');
            $table->foreignUuid('brandId')->references('brandId')->on('brands');
            $table->string('moboName',255);
            $table->string('moboChipset',255);
            $table->string('moboPort',255);
            $table->string('moboStorageSata',255);
            $table->string('moboStorageM2',255);
            $table->string('moboFormFactor',255);
            $table->string('moboMemoryType',255);
            $table->string('moboMemoryCap',255);
            $table->string('moboMemorySlot',255);
            $table->text('moboDescription');
            $table->string('moboWarranty',255);
            $table->string('moboPrice', 255);
            $table->string('moboStock', 255);
            $table->string('moboImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motherboards');
    }
};