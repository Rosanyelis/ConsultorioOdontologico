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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('url_logo')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('name_doctor')->nullable();
            $table->string('mcd')->nullable();
            $table->string('url_signature')->nullable();
            $table->boolean('mantenance')->default(false);
            $table->boolean('active')->default(true);
            $table->string('type_plan')->nullable(); // anual o mensual
            $table->float('price_plan')->nullable();
            $table->string('currency_plan')->nullable();
            $table->string('symbol_plan')->nullable();
            $table->date('start_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
