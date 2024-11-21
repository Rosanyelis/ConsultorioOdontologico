<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
           'name'           => 'TeethSoft',
           'url_logo'       => './images/logo.png',
           'phone'          => '1234567890',
           'whatsapp'       => '1234567890',
           'address'        => 'Calle 123, Ciudad',
           'email'          => 'MlXbQ@example.com',
           'mantenance'     => '0',
           'active'         => '1',
           'type_plan'      => 'Mensual',
           'price_plan'     => '9.99',
           'currency_plan'  => 'Soles',
           'symbol_plan'    => 'S/',
           'start_date'     => '2023-01-01',
           'expiration_date' => '2023-12-31',

        ]);
    }
}
