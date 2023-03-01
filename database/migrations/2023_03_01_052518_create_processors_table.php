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
        Schema::create('processors', function (Blueprint $table) {
            $table->uuid('idProcessors')->primary();
            $table->foreignUuid('idSP')->references('idSP')->on('socket_processors');
            $table->foreignUuid('idMereks')->references('idMereks')->on('mereks');
            $table->uuid('idSocket');
            $table->string('nama_proce',255);
            $table->string('generation',255);
            $table->string('core',255);
            $table->string('thread',255);
            $table->string('baseSpeed',255);
            $table->string('boostSpeed',255);
            $table->string('cache',255);
            $table->string('arsitektur',255);
            $table->string('igpu',255);
            $table->string('power',255);
            $table->string('heatsink',255);
            $table->string('garansi',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processors');
    }
};
