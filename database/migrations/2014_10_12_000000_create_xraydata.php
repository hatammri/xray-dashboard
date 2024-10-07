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
        Schema::create('xraydata.', function (Blueprint $table) {
            $table->id();
            $table->foreignId('load_id');
            $table->foreign('load_id')->references('id')->on('load');
            $table->foreignId('operator_id');
            $table->foreign('operator_id')->references('id')->on('operator');
            $table->string('description');
            $table->string('xray_images');
            $table->string(column: 'weight_load');
            $table->string(column: 'is_conflict');
            $table->string(column: 'vehicle_type');
            $table->string(column: 'load_homogeneity');
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
        Schema::dropIfExists('xraydata.');
    }
};
