<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('customerId')->primary();
            $table->string('customerName',255);
            $table->string('customerEmail',255)->unique();
            $table->string('customerPhoneNumber',32);
            $table->string('customerPassword',255);
            $table->string('customerVerifyKey',255);
            $table->string('customerGoogle',255)->nullable();
            $table->timestamp('customerVerifyAt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};