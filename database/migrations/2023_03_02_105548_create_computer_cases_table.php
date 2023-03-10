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
        Schema::create('computer_cases', function (Blueprint $table) {
            $table->uuid('caseId',255)->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands');
            $table->string('caseName',255);
            $table->string('caseType',255);
            $table->string('caseFanSlot',255);
            $table->string('caseDescription',10000);
            $table->string('caseWarranty',255);
            $table->string('casePrice', 255);
            $table->string('caseStock', 255);
            $table->string('caseImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer_cases');
    }
};
