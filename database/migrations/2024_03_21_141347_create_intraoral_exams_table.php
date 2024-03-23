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
        Schema::create('intraoral_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('cheeks'); //carrillos
            $table->string('mucous_membranes'); //mucosas
            $table->string('gums'); //encías
            $table->string('language'); //lengua
            $table->string('palate'); //paladar
            $table->string('torus'); //torus
            $table->string('aftas'); //aftas
            $table->string('supragingival_tartar'); //sarro supragingival
            $table->string('subgingival'); //subgingival
            $table->string('plate'); //placa
            $table->string('crowding'); //apiñamiento
            $table->text('observations'); //placa
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intraoral_exams');
    }
};
