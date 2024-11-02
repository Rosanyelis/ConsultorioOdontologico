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
        Schema::create('abono_cuenta_cobrars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('cuenta_cobrars_id')->references('id')->on('cuenta_cobrars')->onDelete('cascade');
            $table->decimal('monto', $precision = 8, $scale = 2);
            $table->string('metodo_pago');
            $table->string('numero_referencia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abono_cuenta_cobrars');
    }
};
