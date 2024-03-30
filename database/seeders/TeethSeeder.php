<?php

namespace Database\Seeders;

use App\Models\Teeth;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeethSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dientes superiores
        Teeth::create(['code' => '18']);
        Teeth::create(['code' => '17']);
        Teeth::create(['code' => '16']);
        Teeth::create(['code' => '15']);
        Teeth::create(['code' => '14']);
        Teeth::create(['code' => '13']);
        Teeth::create(['code' => '12']);
        Teeth::create(['code' => '11']);
        Teeth::create(['code' => '21']);
        Teeth::create(['code' => '22']);
        Teeth::create(['code' => '23']);
        Teeth::create(['code' => '24']);
        Teeth::create(['code' => '25']);
        Teeth::create(['code' => '26']);
        Teeth::create(['code' => '27']);
        Teeth::create(['code' => '28']);
        // dientes inferiores
        Teeth::create(['code' => '48']);
        Teeth::create(['code' => '47']);
        Teeth::create(['code' => '46']);
        Teeth::create(['code' => '45']);
        Teeth::create(['code' => '44']);
        Teeth::create(['code' => '43']);
        Teeth::create(['code' => '42']);
        Teeth::create(['code' => '41']);
        Teeth::create(['code' => '31']);
        Teeth::create(['code' => '32']);
        Teeth::create(['code' => '33']);
        Teeth::create(['code' => '34']);
        Teeth::create(['code' => '35']);
        Teeth::create(['code' => '36']);
        Teeth::create(['code' => '37']);
        Teeth::create(['code' => '38']);

        // dientes de niños
        // dientes superiores
        Teeth::create(['code' => '55']);
        Teeth::create(['code' => '54']);
        Teeth::create(['code' => '53']);
        Teeth::create(['code' => '52']);
        Teeth::create(['code' => '51']);
        Teeth::create(['code' => '61']);
        Teeth::create(['code' => '62']);
        Teeth::create(['code' => '63']);
        Teeth::create(['code' => '64']);
        Teeth::create(['code' => '65']);
        // dientes inferiores
        Teeth::create(['code' => '85']);
        Teeth::create(['code' => '84']);
        Teeth::create(['code' => '83']);
        Teeth::create(['code' => '82']);
        Teeth::create(['code' => '81']);
        Teeth::create(['code' => '71']);
        Teeth::create(['code' => '72']);
        Teeth::create(['code' => '73']);
        Teeth::create(['code' => '74']);
        Teeth::create(['code' => '75']);
    }
}
