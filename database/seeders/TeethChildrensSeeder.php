<?php

namespace Database\Seeders;

use App\Models\TeethChildrens;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeethChildrensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dientes superiores
        TeethChildrens::create(['code' => '55']);
        TeethChildrens::create(['code' => '54']);
        TeethChildrens::create(['code' => '53']);
        TeethChildrens::create(['code' => '52']);
        TeethChildrens::create(['code' => '51']);
        TeethChildrens::create(['code' => '61']);
        TeethChildrens::create(['code' => '62']);
        TeethChildrens::create(['code' => '63']);
        TeethChildrens::create(['code' => '64']);
        TeethChildrens::create(['code' => '65']);
        // dientes inferiores
        TeethChildrens::create(['code' => '85']);
        TeethChildrens::create(['code' => '84']);
        TeethChildrens::create(['code' => '83']);
        TeethChildrens::create(['code' => '82']);
        TeethChildrens::create(['code' => '81']);
        TeethChildrens::create(['code' => '71']);
        TeethChildrens::create(['code' => '72']);
        TeethChildrens::create(['code' => '73']);
        TeethChildrens::create(['code' => '74']);
        TeethChildrens::create(['code' => '75']);
    }
}
