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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->string('firstname');
            $table->string('second_name')->nullable();
            $table->string('lastname');
            $table->string('second_surname')->nullable();
            $table->string('phone');
            $table->string('whatsapp');
            $table->date('birthdate');
            $table->integer('age');
            $table->enum('civil_status', ['Soltero', 'Casado', 'Viudo', 'Divorciado']);
            $table->enum('sex', ['F', 'M', 'O']);
            $table->string('occupation');
            $table->string('parent_name')->nullable();
            $table->string('parent_lastname')->nullable();
            $table->string('parent_type')->nullable();
            $table->date('last_visit_date')->nullable();
            $table->string('url_signature')->nullable();
            $table->timestamps();
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
