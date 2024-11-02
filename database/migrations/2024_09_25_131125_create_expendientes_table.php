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
        Schema::create('expendientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sucursals_id')->constrained()->onDelete('cascade');
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreignId('materias_id')->references('id')->on('materias')->onDelete('cascade');
            $table->foreignId('juzgados_id')->references('id')->on('juzgados')->onDelete('cascade');
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->string('asunto');
            $table->string('numero_expendiente');
            $table->string('contraparte');
            $table->enum('tipo_costo', ['Fijo', 'Variable'])->default('Fijo');
            $table->decimal('costo_porcentaje', $precision = 8, $scale = 0)->nullable();
            $table->decimal('porcentaje_asunto', $precision = 8, $scale = 0)->nullable();
            $table->decimal('valor_porcentaje', $precision = 8, $scale = 0)->nullable();
            $table->enum('estado', ['Activo', 'Suspendido', 'Terminado'])->default('Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expendientes');
    }
};
