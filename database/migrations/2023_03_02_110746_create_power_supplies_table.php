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
        Schema::create('power_supplies', function (Blueprint $table) {
            $table->uuid('psuId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands')->onDelete('cascade');
            $table->string('psuName',255);
            $table->string('psuPower',255);
            $table->string('psuCertification',255);
            $table->string('psuEfficiency',255);
            $table->string('psuCooling',255);
            $table->string('psuModular',255);
            $table->string('psuConnector',255);
            $table->string('psuWarranty',255);
            $table->string('psuPrice', 255);
            $table->string('psuStock', 255);
            $table->string('psuImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('power_supplies');
    }
};