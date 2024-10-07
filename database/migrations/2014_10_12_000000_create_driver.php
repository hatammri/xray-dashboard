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
        Schema::create('driver', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id');
            $table->foreign('city_id')->references('id')->on('city');
            $table->string('name');
            $table->string('phone_number')->unique();
            $table->string('national_code');
            $table->string('nationality');
            $table->string('religion');
            $table->string('driver_license_number');
            $table->string('address');
            $table->string('description');
            $table->string('is_active');
            $table->string('criminal_background');
            $table->string('avatar')->default('defult.png');
            $table->string('slug');
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
