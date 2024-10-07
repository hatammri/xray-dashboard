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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('load_id');
            $table->foreign('load_id')->references('id')->on('load');
            $table->string('name');
            $table->string('phone_number')->unique();
            $table->string('nationality');
            $table->string('religion');
            $table->string(column: 'address');
            $table->string(column: 'is_active');
            $table->string(column: 'description');
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
