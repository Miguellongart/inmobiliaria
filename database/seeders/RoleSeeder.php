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
        /*Paises*/
        Permission::updateOrCreate(
            ['name' => 'admin.pais.index'],
            ['description' => 'Listado paises'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.pais.create'],
            ['description' => 'Crear pais'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.pais.edit'],
            ['description' => 'Editar pais'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.pais.destroy'],
            ['description' => 'Eliminar pais'])->syncRoles([$role1]);
        /*Estados*/
        Permission::updateOrCreate(
            ['name' => 'admin.estado.index'],
            ['description' => 'Listado estados'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.estado.create'],
            ['description' => 'Crear estado'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.estado.edit'],
            ['description' => 'Editar estado'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.estado.destroy'],
            ['description' => 'Eliminar estado'])->syncRoles([$role1]);
        /*Municipios*/
        Permission::updateOrCreate(
            ['name' => 'admin.municipio.index'],
            ['description' => 'Listado municipios'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.municipio.create'],
            ['description' => 'Crear municipio'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.municipio.edit'],
            ['description' => 'Editar municipio'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.municipio.destroy'],
            ['description' => 'Eliminar municipio'])->syncRoles([$role1]);
        /*Tipo operacion*/
        Permission::updateOrCreate(
            ['name' => 'admin.t_operacion.index'],
            ['description' => 'Listado Tipo de operaciones'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.t_operacion.create'],
            ['description' => 'Crear Tipo de operacion'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.t_operacion.edit'],
            ['description' => 'Editar Tipo de operacion'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.t_operacion.destroy'],
            ['description' => 'Eliminar Tipo de operacion'])->syncRoles([$role1]);
        /*Tipo Propiedad*/
        Permission::updateOrCreate(
            ['name' => 'admin.t_propiedad.index'],
            ['description' => 'Listado Tipo de propiedades'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.t_propiedad.create'],
            ['description' => 'Crear Tipo de propiedad'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.t_propiedad.edit'],
            ['description' => 'Editar Tipo de propiedad'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.t_propiedad.destroy'],
            ['description' => 'Eliminar Tipo de propiedad'])->syncRoles([$role1]);

        /*tag facilidad y cercania*/
        Permission::updateOrCreate(
            ['name' => 'admin.facilidad.index'],
            ['description' => 'Listado de tags facilidades'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.facilidad.create'],
            ['description' => 'Crear tags facilida'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.facilidad.edit'],
            ['description' => 'Editar tags facilida'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.facilidad.destroy'],
            ['description' => 'Eliminar tags facilida'])->syncRoles([$role1]);

        /*Tag adicional*/
        Permission::updateOrCreate(
            ['name' => 'admin.adicional.index'],
            ['description' => 'Listado  de Tag adicionales'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.adicional.create'],
            ['description' => 'Crear Tag de adicional'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.adicional.edit'],
            ['description' => 'Editar Tag de adicional'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.adicional.destroy'],
            ['description' => 'Eliminar Tag de adicional'])->syncRoles([$role1]);

        /*Tag Propiedad*/
        Permission::updateOrCreate(
            ['name' => 'admin.instalacion.index'],
            ['description' => 'Listado de tags de instalaciones'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.instalacion.create'],
            ['description' => 'Crear tag de instalacion'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.instalacion.edit'],
            ['description' => 'Editar tag de instalacion'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.instalacion.destroy'],
            ['description' => 'Eliminar tag de instalacion'])->syncRoles([$role1]);

        /*Empresa*/
        Permission::updateOrCreate(
            ['name' => 'admin.empresa.index'],
            ['description' => 'Listado de Informacion sobre la empresa'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.empresa.create'],
            ['description' => 'Agregar nueva informacion sobre empresa'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.empresa.edit'],
            ['description' => 'Editar informacion sobre empresa'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.empresa.destroy'],
            ['description' => 'Eliminar informacion sobre empresa'])->syncRoles([$role1]);

        /*Propiedad*/
        Permission::updateOrCreate(
            ['name' => 'admin.propiedad.index'],
            ['description' => 'Listado de Propiedades'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.propiedad.create'],
            ['description' => 'Agregar nueva Propiedad'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.propiedad.edit'],
            ['description' => 'Editar Propiedad'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.propiedad.destroy'],
            ['description' => 'Eliminar Propiedad'])->syncRoles([$role1]);

        /*Servicio*/
        Permission::updateOrCreate(
            ['name' => 'admin.servicio.index'],
            ['description' => 'Listado de Servicios'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.servicio.create'],
            ['description' => 'Agregar nueva Servicio'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.servicio.edit'],
            ['description' => 'Editar Servicio'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.servicio.destroy'],
            ['description' => 'Eliminar Servicio'])->syncRoles([$role1]);

        /*Proyecto*/
        Permission::updateOrCreate(
            ['name' => 'admin.proyecto.index'],
            ['description' => 'Listado de Proyectos'])->syncRoles([$role1, $role2]);
        Permission::updateOrCreate(
            ['name' => 'admin.proyecto.create'],
            ['description' => 'Agregar nueva Proyecto'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.proyecto.edit'],
            ['description' => 'Editar Proyecto'])->syncRoles([$role1]);
        Permission::updateOrCreate(
            ['name' => 'admin.proyecto.destroy'],
            ['description' => 'Eliminar Proyecto'])->syncRoles([$role1]);
    }
}
