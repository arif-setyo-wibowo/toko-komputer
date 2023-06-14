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
        Schema::create('mouse', function (Blueprint $table) {
            $table->uuid('mouseId')->primary();
            $table->foreignUuid('brandId')->references('brandId')->on('brands')->onDelete('cascade');
            $table->string('mouseName',255);
            $table->string('mouseSensor',255);
            $table->string('mouseSwitch',255);
            $table->string('mouseDpi',255);
            $table->string('mouseSpeed',255);
            $table->string('mousePollRate', 255);
            $table->string('mouseConnection',255);
            $table->string('mouseGrip',255);
            $table->text('mouseDescription');
            $table->string('mouseWarranty',255);
            $table->string('mousePrice', 255);
            $table->string('mouseStock',255);
            $table->string('mouseImage', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mice');
    }
};