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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->decimal('total', $precision = 8, $scale = 2);
            $table->enum('payment_type', ['Total', 'Parcial', 'Por Cuotas']);
            $table->enum('status', ['Pendiente', 'Pagado', 'Cancelado']);
            $table->integer('number_installments')->nullable();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
