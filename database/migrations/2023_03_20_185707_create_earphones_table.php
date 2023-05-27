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
        Schema::create('earphones', function (Blueprint $table) {
            $table->uuid('earphoneId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands')->onDelete('cascade');
            $table->string('earphoneName',255);
            $table->string('earphoneType',255);
            $table->string('earphoneSensitivity',255);
            $table->string('earphoneImpedance',255);
            $table->string('earphoneDriver',255);
            $table->string('earphoneConnection', 255);
            $table->string('earphoneSoundSig',255);
            $table->boolean('earphoneHaveMic');
            $table->string('earphoneFeature',255);
            $table->string('earWarranty',255);
            $table->string('earPrice', 255);
            $table->string('earStock',255);
            $table->string('earImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earphones');
    }
};