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
            $table->enum('has_disease', ['Si', 'No']); // tiene enfermedad?
            $table->text('disease')->nullable();
            $table->enum('allergies', ['Si', 'No']); // alergias
            $table->enum('epilepsy', ['Si', 'No']); // epilepsia
            $table->enum('hepatitis', ['Si', 'No']); // hepatitis
            $table->enum('hypertension', ['Si', 'No']); // hipertensión
            $table->enum('heart_disease', ['Si', 'No']); // enfermedad cardiaca
            $table->enum('have_diabetes', ['Si', 'No']); // tiene diabetes
            $table->enum('pregnant', ['Si', 'No']); // embarazada
            $table->enum('dental_floss', ['Si', 'No']); // usa hilo dental
            $table->enum('tooth_pain', ['Si', 'No']); // dolor de dientes?
            $table->enum('bad_smell_taste', ['Si', 'No']); // mal olor o sabor
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
