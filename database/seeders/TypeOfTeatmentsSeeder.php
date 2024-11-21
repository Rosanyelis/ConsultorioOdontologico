<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeOfTreatments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeOfTeatmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfTreatments::create(['name' => 'Fisioterapia']);
        TypeOfTreatments::create(['name' => 'Descartaje']);
        TypeOfTreatments::create(['name' => 'Sellante']);
        TypeOfTreatments::create(['name' => 'Resina Simple']);
        TypeOfTreatments::create(['name' => 'Resina Compuesta']);
        TypeOfTreatments::create(['name' => 'Exodoncia Simple']);
        TypeOfTreatments::create(['name' => 'Endodoncia Anterior']);
        TypeOfTreatments::create(['name' => 'Endodoncia Premolar']);
        TypeOfTreatments::create(['name' => 'Endodoncia Molar']);
        TypeOfTreatments::create(['name' => 'Espigo - Muñon']);
        TypeOfTreatments::create(['name' => 'Corona de Porcelana']);
        TypeOfTreatments::create(['name' => 'Corona']);
        TypeOfTreatments::create(['name' => 'Incrustación']);
        TypeOfTreatments::create(['name' => 'Puente']);
        TypeOfTreatments::create(['name' => 'Cirugía 3º molar']);
        TypeOfTreatments::create(['name' => 'Protesis Parcial o Total']);
        TypeOfTreatments::create(['name' => 'Blanqueamiento']);
        TypeOfTreatments::create(['name' => 'Ortodoncia']);
    }
}
