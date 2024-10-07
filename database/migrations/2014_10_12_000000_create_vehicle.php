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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->string('type');
            $table->string('Length');
            $table->string(column: 'width');
            $table->string(column: 'Production_Year');
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
        Schema::dropIfExists('vehicle');
    }
};
