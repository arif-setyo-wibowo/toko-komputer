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
        Schema::create('mobos', function (Blueprint $table) {
            $table->uuid('idMobo')->primary();
            $table->foreignUuid('idSP')->references('idSP')->on('socket_processors');
            $table->foreignUuid('idMereks')->references('idMereks')->on('mereks');
            $table->string('nama_mobo',255);
            $table->string('chipset',255);
            $table->string('port',255);
            $table->string('storage',255);
            $table->string('formFactor',255);
            $table->string('tipeMemory',255);
            $table->string('maxMemory',255);
            $table->string('deskripsi',255);
            $table->string('garansi',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobos');
    }
};
