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
        Schema::table('socket_processors', function (Blueprint $table) {
            $table->foreignUuid('idMereks')->after('idSP')->references('idMereks')->on('mereks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('socket_processors', function (Blueprint $table) {
            $table->dropColumn('idMereks');
        });
    }
};
