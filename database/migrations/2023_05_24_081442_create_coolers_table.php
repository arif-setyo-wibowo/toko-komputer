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
        Schema::create('coolers', function (Blueprint $table) {
            $table->uuid('coolerId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands');
            $table->string('coolerType',255);
            $table->string('coolerCaseType',255);
            $table->string('coolerName',255);
            $table->string('coolerRpm',255);
            $table->string('coolerPrice',255);
            $table->string('coolerStock',255);
            $table->string('coolerImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coolers');
    }
};
