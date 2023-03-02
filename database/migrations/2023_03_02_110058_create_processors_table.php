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
        Schema::create('processors', function (Blueprint $table) {
            $table->uuid('processorId')->primary();
            $table->foreignUuid('processorSocketId')->references('processorSocketId')->on('processor_sockets');
            $table->foreignUuid('brandId')->references('brandId')->on('brands');
            $table->string('processorName',255);
            $table->string('processorGen',255);
            $table->string('processorCore',255);
            $table->string('processorThread',255);
            $table->string('processorBaseSpeed',255);
            $table->string('processorBoostSpeed',255);
            $table->string('processorCache',255);
            $table->string('processorArch',255);
            $table->string('processorIgpu',255);
            $table->string('processorPower',255);
            $table->string('processorHeatsink',255);
            $table->string('processorWarranty',255);
            $table->string('processorPrice', 255);
            $table->string('processorStock', 255);
            $table->string('processorImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processors');
    }
};
