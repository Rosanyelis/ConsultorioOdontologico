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
        Schema::create('dental_history_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dental_history_id')->nullable();
            $table->unsignedBigInteger('teeths_id')->nullable();
            $table->unsignedBigInteger('teeth_childrens_id')->nullable();
            $table->string('treatment');
            $table->foreign('dental_history_id')->references('id')->on('dental_histories');
            $table->foreign('teeths_id')->references('id')->on('teeths');
            $table->foreign('teeth_childrens_id')->references('id')->on('teeth_childrens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_history_details');
    }
};
