<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SucursalSeeder::class,
            RoleSeeder::class,
            JuzgadoSeeder::class,
            MateriaSeeder::class,
            MedioContactoSeeder::class,
        ]);

        $dev = User::create([
            'sucursals_id' => 1,
            'name' => 'Desarrolladora',
            'email' => 'rosanyelismendoza@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);
        $dev->assignRole('Desarrollador');

        $administrador = User::create([
            'sucursals_id' => 1,
            'name' => 'Aldana & Asociados',
            'email' => 'aldanayasociados@outlook.com',
            'password' => Hash::make('Paolo1803$12'), // password
        ]);
        $administrador->assignRole('Administrador');

    }
}
