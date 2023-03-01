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
        Schema::create('identitas', function (Blueprint $table) {
            $table->uuid('idIdentitas')->primary();
            $table->foreignUuid('idSosmed');
            $table->foreign('idSosmed')->references('idSosmed')->on('sosmeds');
            $table->string('nama_identitas',255);
            $table->string('alamat',255);
            $table->string('telepon',32);
            $table->string('email',255);
            $table->string('gambar',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas');
    }
};
