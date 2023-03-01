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
        Schema::create('storages', function (Blueprint $table) {
            $table->uuid('idStorage')->primary();
            $table->uuid('idMerk');
            $table->string('nama_storage',255);
            $table->string('tipe',255);
            $table->string('size',255);
            $table->string('read',255);
            $table->string('write',255);
            $table->string('rpm',255);
            $table->string('ukuran',255);
            $table->string('garansi',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storages');
    }
};
