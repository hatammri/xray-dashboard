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
        Schema::create('driverpersonalimages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id');
            $table->foreign('driver_id')->references('id')->on('driver');
            $table->string('image')->default('defult.png');
            $table->string('is_active');
            $table->string('is_document');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
