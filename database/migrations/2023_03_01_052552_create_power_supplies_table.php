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
            $table->uuid('idPower')->primary();
            $table->foreignUuid('idMereks')->references('idMereks')->on('mereks');
            $table->string('nama_power',255);
            $table->string('power',255);
            $table->string('certification',255);
            $table->string('efficiency',255);
            $table->string('cooling',255);
            $table->string('modular',255);
            $table->string('connector',255);
            $table->string('garansi',255);
            $table->string('harga', 255);
            $table->string('stok', 255);
            $table->string('gambar', 255);
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
