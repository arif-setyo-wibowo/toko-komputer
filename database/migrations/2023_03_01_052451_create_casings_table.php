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
        Schema::create('casings', function (Blueprint $table) {
            $table->uuid('idCasing',255)->primary();
            $table->uuid('idMerk');
            $table->string('nama_casing',255);
            $table->string('tipe',255);
            $table->string('slotFan',255);
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
        Schema::dropIfExists('casings');
    }
};
