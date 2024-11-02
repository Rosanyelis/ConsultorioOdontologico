<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Desarrollador = Role::create(['name' => 'Desarrollador']);
        $rol = Role::create(['name' => 'Administrador']);

        $permiso = Permission::create(['name' => 'juzgado.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'juzgado.edit']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'juzgado.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'juzgado.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'materia.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'materia.edit']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'materia.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'materia.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'medio-contacto.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'medio-contacto.edit']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'medio-contacto.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'medio-contacto.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'cliente.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'cliente.edit']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'cliente.show']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'cliente.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'cliente.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'cuenta-cobrar.show']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'cuenta-cobrar.abonar']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'cuenta-cobrar.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'expediente.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'expediente.show']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'expediente.edit']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'expediente.changestatus']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'expediente.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'nota.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'nota.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'file.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'file.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'user.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'user.edit']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'user.show']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'user.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'user.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'role.create']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'role.edit']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'role.show']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'role.destroy']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'role.index']);
        $rol->givePermissionTo($permiso);
        $Desarrollador->givePermissionTo($permiso);
    }
}
