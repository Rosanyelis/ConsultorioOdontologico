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
        Schema::create('installment_payment_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('billing_id');
            $table->integer('fee');
            $table->decimal('amount', $precision = 8, $scale = 2);

            $table->foreign('billing_id')->references('id')->on('billings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installment_payment_invoices');
    }
};
