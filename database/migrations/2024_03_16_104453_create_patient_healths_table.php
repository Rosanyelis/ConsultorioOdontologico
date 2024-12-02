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
        Schema::create('patient_healths', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('has_disease'); // tiene enfermedad?
            $table->text('disease')->nullable();
            $table->string('allergies'); // alergias
            $table->string('epilepsy'); // epilepsia
            $table->string('hepatitis'); // hepatitis
            $table->string('hypertension'); // hipertensión
            $table->string('heart_disease'); // enfermedad cardiaca
            $table->string('have_diabetes'); // tiene diabetes
            $table->string('pregnant'); // embarazada
            $table->string('dental_floss'); // usa hilo dental
            $table->string('tooth_pain'); // dolor de dientes?
            $table->string('bad_smell_taste'); // mal olor o sabor
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_healths');
    }
};
