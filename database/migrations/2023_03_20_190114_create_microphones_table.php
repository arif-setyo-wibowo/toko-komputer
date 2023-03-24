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
        Schema::create('microphones', function (Blueprint $table) {
            $table->uuid('micId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands');
            $table->string('micName',255);
            $table->string('micType',255);
            $table->string('micSensitivity',255);
            $table->string('micImpedance',255);
            $table->string('micFreqResponse',255);
            $table->string('micConnection', 255);
            $table->string('micFeature',255);
            $table->string('micWarranty',255);
            $table->string('micPrice', 255);
            $table->string('micStock',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microphones');
    }
};
