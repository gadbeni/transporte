<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2021-06-02 17:55:30',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2022-08-14 23:31:50',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2021-06-02 17:55:30',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2021-06-02 17:55:30',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2021-06-02 17:55:31',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2024-03-04 11:41:29',
            ),
            3 => 
            array (
                'controller' => NULL,
                'created_at' => '2022-05-24 15:21:20',
                'description' => NULL,
                'details' => '{"order_column":"table_name","order_display_column":"table_name","order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Permisos',
                'display_name_singular' => 'Permiso',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 4,
                'model_name' => 'App\\Models\\Permission',
                'name' => 'permissions',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'permissions',
                'updated_at' => '2022-05-24 15:21:20',
            ),
            4 => 
            array (
                'controller' => NULL,
                'created_at' => '2024-02-28 16:44:22',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Organizaciones',
                'display_name_singular' => 'Organización',
                'generate_permissions' => 1,
                'icon' => 'voyager-company',
                'id' => 5,
                'model_name' => 'App\\Models\\Organization',
                'name' => 'organizations',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'organizations',
                'updated_at' => '2024-03-25 14:00:31',
            ),
            5 => 
            array (
                'controller' => NULL,
                'created_at' => '2024-02-29 14:25:07',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Localizaciones',
                'display_name_singular' => 'Localizacion',
                'generate_permissions' => 1,
                'icon' => 'voyager-location',
                'id' => 7,
                'model_name' => 'App\\Models\\Location',
                'name' => 'locations',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'locations',
                'updated_at' => '2024-02-29 15:13:26',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2024-02-29 15:31:56',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Rutas',
                'display_name_singular' => 'Ruta',
                'generate_permissions' => 1,
                'icon' => 'voyager-forward',
                'id' => 9,
                'model_name' => 'App\\Models\\Route',
                'name' => 'routes',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'routes',
                'updated_at' => '2024-02-29 16:24:12',
            ),
            7 => 
            array (
                'controller' => 'App\\Http\\Controllers\\voyager\\AssociateController',
                'created_at' => '2024-03-01 16:04:59',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Asociados',
                'display_name_singular' => 'Asociado',
                'generate_permissions' => 1,
                'icon' => 'voyager-people',
                'id' => 10,
                'model_name' => 'App\\Models\\Associate',
                'name' => 'associates',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'associates',
                'updated_at' => '2024-11-04 16:02:31',
            ),
            8 => 
            array (
                'controller' => NULL,
                'created_at' => '2024-03-01 16:34:22',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Conductores',
                'display_name_singular' => 'Conductor',
                'generate_permissions' => 1,
                'icon' => 'fa fa-drivers-license-o',
                'id' => 11,
                'model_name' => 'App\\Models\\Driver',
                'name' => 'drivers',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'drivers',
                'updated_at' => '2024-03-25 13:54:18',
            ),
            9 => 
            array (
                'controller' => NULL,
                'created_at' => '2024-03-01 16:55:32',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'vehiculos',
                'display_name_singular' => 'vehiculo',
                'generate_permissions' => 1,
                'icon' => 'voyager-truck',
                'id' => 12,
                'model_name' => 'App\\Models\\Vehicle',
                'name' => 'vehicles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'vehicles',
                'updated_at' => '2024-03-22 11:37:50',
            ),
        ));
        
        
    }
}