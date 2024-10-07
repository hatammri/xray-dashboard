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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('load_id');
            $table->foreign('load_id')->references('id')->on('load');
            $table->foreignId('port_origin');
            $table->foreign('port_origin')->references('id')->on('port');
            $table->foreignId('port_destination');
            $table->foreign('port_destination')->references('id')->on('port');
            $table->foreignId('operator_id');
            $table->foreign('operator_id')->references('id')->on('operator');
            $table->string('longitude');
            $table->string(column: 'latitude');
            $table->string(column: 'avg_speed');
            $table->string(column: 'Instantaneous_speed');
            $table->string(column: 'Number_forecast_days');
            $table->string(column: 'Number_days_recorded');
            $table->string(column: 'driving_problems_description');
            $table->timestamp(column: 'Travel_start_date')->nullable();
            $table->timestamp(column: 'Travel_end _date')->nullable();
            $table->integer('is_driving')->default(1);
            $table->integer('is_travelend')->default(1);
            $table->timestamp(column: 'created_at')->nullable();
            $table->timestamp(column: 'updated_at')->nullable();
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
