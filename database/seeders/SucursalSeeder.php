<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sucursal::create([
            'name' => 'ALDANA & ASOCIADOS',
            'logo_login' => '/images/sucursales/logo-aldana-asociados.png',
            'logo_interno' => '/images/sucursales/logo-text-aldana-asociados.png',
            'favicon' => '/images/sucursales/logo-aldana-asociados-favicon.png',
        ]);
    }
}
