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
        Schema::create('keyboards', function (Blueprint $table) {
            $table->uuid('keyboardId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands');
            $table->string('keyboardName',255);
            $table->string('keyboardType',255);
            $table->string('keyboardSize',255);
            $table->string('keyboardSwitch',255);
            $table->string('keyboardLayout',255);
            $table->string('keyboardConnection', 255);
            $table->string('keyboardFeature',255);
            $table->string('keyboardWarranty',255);
            $table->string('keyboardPrice', 255);
            $table->string('keyboardStock',255);
            $table->string('keyboardImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keyboards');
    }
};
