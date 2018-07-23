<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Usuarios
        Permission::create([        
            'name'             => 'Navegar usuarios',
            'slug'             => 'usuario.index',
            'description'      => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([        
            'name'             => 'Ver detalle usuarios',
            'slug'             => 'usuario.show',
            'description'      => 'Ver detalle de cada usuarios del sistema',
        ]);

        Permission::create([        
            'name'             => 'Edición de usuarios',
            'slug'             => 'usuario.edit',
            'description'      => 'Editar cualquier dato de un usuarios del sistema',
        ]);

        Permission::create([        
            'name'             => 'Creación de usuarios',
            'slug'             => 'usuario.create',
            'description'      => 'Editar cualquier dato de un usuarios del sistema',
        ]);

        //Clientes web
        Permission::create([        
            'name'             => 'Navegar clientes',
            'slug'             => 'cliente.index',
            'description'      => 'Lista y navega todos los clientes del sistema',
        ]);

        Permission::create([        
            'name'             => 'Ver detalle clientes',
            'slug'             => 'cliente.show',
            'description'      => 'Ver detalle de cada clientes del sistema',
        ]);

        Permission::create([        
            'name'             => 'Edición de clientes',
            'slug'             => 'cliente.edit',
            'description'      => 'Editar cualquier dato de un clientes del sistema',
        ]);

        Permission::create([        
            'name'             => 'Creación de clientes',
            'slug'             => 'cliente.create',
            'description'      => 'Editar cualquier dato de un clientes del sistema',
        ]);

        //Productos
        Permission::create([        
            'name'             => 'Navegar productos',
            'slug'             => 'producto.index',
            'description'      => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([        
            'name'             => 'Ver detalle productos',
            'slug'             => 'producto.show',
            'description'      => 'Ver detalle de cada productos del sistema',
        ]);

        Permission::create([        
            'name'             => 'Edición de productos',
            'slug'             => 'producto.edit',
            'description'      => 'Editar cualquier dato de un productos del sistema',
        ]);

        
    
    }
}
