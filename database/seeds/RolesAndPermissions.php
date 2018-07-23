<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'create cliente']);
        Permission::create(['name' => 'read cliente']);
        Permission::create(['name' => 'update cliente']);
        Permission::create(['name' => 'delete cliente']);

        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'create productos']);
        Permission::create(['name' => 'read productos']);
        Permission::create(['name' => 'update productos']);
        Permission::create(['name' => 'delete productos']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'vendedor']);
        $role->givePermissionTo('read productos'); 

        $role = Role::create(['name' => 'asistente']);
        $role->givePermissionTo('read cliente', 'update cliente'); 
        
        $role = Role::create(['name' => 'ejecutivo']);
        $role->givePermissionTo('create cliente', 'read cliente', 'update cliente');

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(['create user', 'read user', 'update user', 'delete user']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
