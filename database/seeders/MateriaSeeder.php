<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materia::create(['name' => 'ORAL LABORAL']);
        Materia::create(['name' => 'LABORAL']);
        Materia::create(['name' => 'ORAL FAMILIAR']);
        Materia::create(['name' => 'ORAL MERCANTIL']);
        Materia::create(['name' => 'MERCANTIL MENORES']);
        Materia::create(['name' => 'MERCANTIL']);
        Materia::create(['name' => 'NOTARIA']);
        Materia::create(['name' => 'CIVIL MENORES']);
        Materia::create(['name' => 'CIVIL DE PARTIDO']);
        Materia::create(['name' => 'ASEGURADORA']);
        Materia::create(['name' => 'INFONAVIT']);
        Materia::create(['name' => 'PENAL']);
        Materia::create(['name' => 'ORALIDAD PENAL']);
        Materia::create(['name' => 'AMPARO']);
        Materia::create(['name' => 'OTRO']);

    }
}
