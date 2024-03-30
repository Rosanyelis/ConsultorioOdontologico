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
        Schema::create('treatment_plan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('treatment_plan_id');
            $table->unsignedBigInteger('teeths_id')->nullable();

            $table->string('treatment');

            $table->foreign('treatment_plan_id')->references('id')->on('treatment_plans');
            $table->foreign('teeths_id')->references('id')->on('teeths');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment_plan_details');
    }
};
