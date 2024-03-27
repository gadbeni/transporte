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
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-06-02 17:55:30',
                'updated_at' => '2022-08-14 23:31:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-06-02 17:55:30',
                'updated_at' => '2021-06-02 17:55:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-06-02 17:55:31',
                'updated_at' => '2024-03-04 11:41:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'permissions',
                'slug' => 'permissions',
                'display_name_singular' => 'Permiso',
                'display_name_plural' => 'Permisos',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Permission',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"table_name","order_display_column":"table_name","order_direction":"asc","default_search_key":null}',
                'created_at' => '2022-05-24 15:21:20',
                'updated_at' => '2022-05-24 15:21:20',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'organizations',
                'slug' => 'organizations',
                'display_name_singular' => 'Organización',
                'display_name_plural' => 'Organizaciones',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\Organization',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-02-28 16:44:22',
                'updated_at' => '2024-03-25 14:00:31',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'locations',
                'slug' => 'locations',
                'display_name_singular' => 'Localizacion',
                'display_name_plural' => 'Localizaciones',
                'icon' => 'voyager-location',
                'model_name' => 'App\\Models\\Location',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-02-29 14:25:07',
                'updated_at' => '2024-02-29 15:13:26',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'routes',
                'slug' => 'routes',
                'display_name_singular' => 'Ruta',
                'display_name_plural' => 'Rutas',
                'icon' => 'voyager-forward',
                'model_name' => 'App\\Models\\Route',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-02-29 15:31:56',
                'updated_at' => '2024-02-29 16:24:12',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'associates',
                'slug' => 'associates',
                'display_name_singular' => 'Asociado',
                'display_name_plural' => 'Asociados',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Associate',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-03-01 16:04:59',
                'updated_at' => '2024-03-25 13:57:11',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'drivers',
                'slug' => 'drivers',
                'display_name_singular' => 'Conductor',
                'display_name_plural' => 'Conductores',
                'icon' => 'fa fa-drivers-license-o',
                'model_name' => 'App\\Models\\Driver',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-03-01 16:34:22',
                'updated_at' => '2024-03-25 13:54:18',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'vehicles',
                'slug' => 'vehicles',
                'display_name_singular' => 'vehiculo',
                'display_name_plural' => 'vehiculos',
                'icon' => 'voyager-truck',
                'model_name' => 'App\\Models\\Vehicle',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-03-01 16:55:32',
                'updated_at' => '2024-03-22 11:37:50',
            ),
        ));
        
        
    }
}