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

        $rol2 = Role::where('name', 'Doctor')->first();
        $doctor = User::create([
            'rol_id' => $rol2->id,
            'name' => 'Angel Herrera',
            'email' => 'angelherrera@example.com',
            'password' => Hash::make('admin'), // password
        ]);

        Doctor::create([
            'user_id' => $doctor->id,
            'firstname' => 'Angel',
            'lastname' => 'Herrera',
            'dni' => '1234567',
            'phone' => '123456789',
        ]);

        $rol3 = Role::where('name', 'Doctor')->first();
        $doctor2 = User::create([
            'rol_id' => $rol3->id,
            'name' => 'Ross Orange',
            'email' => 'rossorange@example.com',
            'password' => Hash::make('admin'), // password
        ]);

        Doctor::create([
            'user_id' => $doctor2->id,
            'firstname' => 'Ross',
            'lastname' => 'Orange',
            'dni' => '12347',
            'phone' => '12347',
        ]);

        $rol4 = Role::where('name', 'Doctor')->first();
        $doctor3 = User::create([
            'rol_id' => $rol4->id,
            'name' => 'carlos Uzumaki',
            'email' => 'carlosuzumaki@example.com',
            'password' => Hash::make('admin'), // password
        ]);

        Doctor::create([
            'user_id' => $doctor3->id,
            'firstname' => 'Carlos',
            'lastname' => 'Uzumaki',
            'dni' => '1234987',
            'phone' => '1234987',
        ]);

        $rol5 = Role::where('name', 'Secretaria')->first();
        User::create([
            'rol_id' => $rol5->id,
            'name' => 'Carla Musk',
            'email' => 'carlamusk@example.com',
            'password' => Hash::make('admin'), // password
        ]);


    }
}
