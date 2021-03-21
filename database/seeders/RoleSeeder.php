<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $role1 = Role::updateOrCreate(["name" => "admin"],
            ['description' => 'Rol Administrador']);
        $role2 = Role::updateOrCreate(["name" => "editor"],
            ['description' => 'Rol Editor']);
        /*home*/
        Permission::updateOrCreate(['name' => 'admin.home'],
            ['description' => 'Ver Home'])->syncRoles([$role1, $role2]);
        /*Asginar*/
        Permission::updateOrCreate(['name' => 'admin.assign.roles'],
            ['description' => 'Asignar/Retirar roles al usuario'])->syncRoles([$role1]);
        Permission::updateOrCreate(['name' => 'admin.assign.permissions'],
            ['description' => 'Asignar/Retirar permisos al usuario'])->syncRoles([$role1]);
        /*usuarios*/
        Permission::updateOrCreate(
            ['name' => 'admin.user.index'], 
            ['description' => 'Listado Usuarios'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.user.create'], 
            ['description' => 'Crear usuario'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.user.edit'], 
            ['description' => 'Editar usuario'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.user.destroy'], 
            ['description' => 'Eliminar usuario'])->syncRoles([$role1]);
        /*roles*/
        Permission::updateOrCreate(
            ['name' => 'admin.rol.index'], 
            ['description' => 'Listado roles'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.rol.create'], 
            ['description' => 'Crear rol'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.rol.edit'], 
            ['description' => 'Editar rol'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.rol.destroy'], 
            ['description' => 'Eliminar rol'])->syncRoles([$role1]);
        /*permisos*/
        Permission::updateOrCreate(
            ['name' => 'admin.permissions.index'], 
            ['description' => 'Listado permisos'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.permissions.create'], 
            ['description' => 'Crear permiso'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.permissions.edit'], 
            ['description' => 'Editar permiso'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.permissions.destroy'], 
            ['description' => 'Eliminar permiso'])->syncRoles([$role1]);

    }
}
