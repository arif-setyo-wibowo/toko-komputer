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
        Schema::create('vgas', function (Blueprint $table) {
            $table->uuid('idVga')->primary();
            $table->foreignUuid('idMereks')->references('idMereks')->on('mereks');
            $table->string('nama_vga',255);
            $table->string('interface',255);
            $table->string('baseClock',255);
            $table->string('boostClock',255);
            $table->string('memoryClockSpeed',255);
            $table->string('memoryInterface',255);
            $table->string('memoryType',255);
            $table->string('fitur',255);
            $table->string('powerReq',255);
            $table->string('caseSupp',255);
            $table->string('garansi',255);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vgas');
    }
};
