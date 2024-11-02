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
        Schema::create('cuenta_cobrars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreignId('expendientes_id')->references('id')->on('expendientes')->onDelete('cascade');
            $table->enum('tipo', ['Fijo', 'Variable'])->default('Fijo');
            $table->decimal('monto', $precision = 8, $scale = 0);
            $table->enum('estado', ['Pendiente', 'Pagado'])->default('Pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuenta_cobrars');
    }
};
