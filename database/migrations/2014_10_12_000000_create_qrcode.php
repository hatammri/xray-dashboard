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
        Schema::create('qrcode', function (Blueprint $table) {
            $table->id();
            $table->foreignId('load_id');
            $table->foreign('load_id')->references('id')->on('load');
            $table->foreignId('port_id');
            $table->foreign('port_id')->references('id')->on('port');
            $table->foreignId('operator_id');
            $table->foreign('operator_id')->references('id')->on('operator');
            $table->string('qrcode_type');
            $table->string('qrcode_serial_number');
            $table->string('weight_load');
            $table->string('vehicle_id');
            $table->string('load_homogeneity');
            $table->string('description');
            $table->string('description');
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
        Schema::dropIfExists('qrcode');
    }
};
