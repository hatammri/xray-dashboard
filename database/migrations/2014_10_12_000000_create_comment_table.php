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
        Schema::defaultStringLength(191);
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->foreignId('operator_id');
            $table->foreign('operator_id')->references('id')->on('operator');
            $table->foreignId('driver_id');
            $table->foreign('driver_id')->references('id')->on('driver');
            $table->string('text');
            $table->string('approved');
            $table->timestamp('created_at')->nullable();
            $table->string('updated_at');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
