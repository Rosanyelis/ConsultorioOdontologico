<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
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
            RoleSeeder::class,
            TypeOfTeatmentsSeeder::class,
            TeethSeeder::class,
            SettingSeeder::class
        ]);

        $rol = Role::where('name', 'Desarrollador')->first();
        User::create([
            'rol_id' => $rol->id,
            'name' => 'Desarrolladora',
            'email' => 'rosanyelismendoza@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);

        $rol_ = Role::where('name', 'Desarrollador')->first();
        User::create([
            'rol_id' => $rol_->id,
            'name' => 'Desarrolladora',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'), // password
        ]);

        $rol__ = Role::where('name', 'Doctor')->first();
        User::create([
            'rol_id' => $rol__->id,
            'name' => 'Doctor',
            'email' => 'doctor@example.com',
            'password' => Hash::make('admin'), // password
        ]);

    }
}
