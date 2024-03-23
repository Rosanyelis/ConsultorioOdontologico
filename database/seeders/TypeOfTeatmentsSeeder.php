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
        TypeOfTreatments::create(['name' => 'Blanqueamiento dental']);
        TypeOfTreatments::create(['name' => 'Carillas dentales']);
        TypeOfTreatments::create(['name' => 'Implantes dentales']);
        TypeOfTreatments::create(['name' => 'Ortodoncia']);
        TypeOfTreatments::create(['name' => 'Limpieza dental']);
        TypeOfTreatments::create(['name' => 'Extracción dental']);
        TypeOfTreatments::create(['name' => 'Empastes']);
        TypeOfTreatments::create(['name' => 'Endodoncia']);
        TypeOfTreatments::create(['name' => 'Periodoncia']);
        TypeOfTreatments::create(['name' => 'Cirugía oral']);
    }
}
