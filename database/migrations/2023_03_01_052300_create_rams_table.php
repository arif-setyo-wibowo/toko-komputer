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
        Schema::create('rams', function (Blueprint $table) {
            $table->uuid('idRam')->primary();
            $table->foreignUuid('idMerks')->references('idMerks')->on('merks');
            $table->string('nama_ram',255);
            $table->string('tipe',255);
            $table->string('speed',255);
            $table->string('capacity',255);
            $table->string('casLatency',255);
            $table->string('voltage',255);
            $table->string('garansi',255);
            $table->string('harga',255);
            $table->string('stok',255);
            $table->string('gambar',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rams');
    }
};
