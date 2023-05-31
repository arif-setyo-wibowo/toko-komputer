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
        Schema::create('storages', function (Blueprint $table) {
            $table->uuid('storageId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands')->onDelete('cascade');
            $table->string('storageName',255);
            $table->string('storageType',255);
            $table->string('storageSize',255);
            $table->string('storageReadSpeed',255);
            $table->string('storageWriteSpeed',255);
            $table->string('storageRpm',255);
            $table->string('storageDimension',255);
            $table->string('storageWarranty',255);
            $table->string('storagePrice', 255);
            $table->string('storageStock', 255);
            $table->string('storageImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storages');
    }
};