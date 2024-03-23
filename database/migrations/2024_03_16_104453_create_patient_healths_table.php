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
            $table->enum('has_disease', ['Si', 'No']);
            $table->text('disease')->nullable();
            $table->enum('medical_treatment', ['Si', 'No']);
            $table->text('treatment_text')->nullable();
            $table->enum('allergies', ['Si', 'No']);
            $table->enum('epilepsy', ['Si', 'No']);
            $table->enum('hepatitis', ['Si', 'No']);
            $table->enum('hypertension', ['Si', 'No']);
            $table->enum('vih', ['Si', 'No']);
            $table->enum('hypotension', ['Si', 'No']);
            $table->enum('tuberculosis', ['Si', 'No']);
            $table->enum('heart_disease', ['Si', 'No']);
            $table->enum('have_diabetes', ['Si', 'No']);
            $table->string('type_diabete')->nullable();
            $table->enum('pregnant', ['Si', 'No']);
            $table->enum('drugs', ['Si', 'No']);
            $table->enum('alcohol', ['Si', 'No']);
            $table->enum('tobacco', ['Si', 'No']);
            $table->enum('asthma', ['Si', 'No']);
            $table->string('asthma_text')->nullable();
            $table->enum('ets', ['Si', 'No']);
            $table->string('ets_text')->nullable();
            $table->text('harmful_habits')->nullable();

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
