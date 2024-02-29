<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-home',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.profile',
                'target' => '_self',
                'title' => 'Inicio',
                'updated_at' => '2021-06-02 14:51:15',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Media',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            2 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => 'null',
                'parent_id' => 11,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Usuarios',
                'updated_at' => '2022-05-24 15:06:46',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 11,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2021-06-02 14:08:05',
                'url' => '',
            ),
            4 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:32',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Herramientas',
                'updated_at' => '2024-02-29 15:35:35',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Menu Builder',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Database',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compass',
                'updated_at' => '2021-06-02 14:07:22',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2021-06-02 14:07:23',
                'url' => '',
            ),
            9 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 17:55:33',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Configuraciones',
                'updated_at' => '2024-02-29 15:35:35',
                'url' => '',
            ),
            10 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-02 14:07:53',
                'icon_class' => 'voyager-lock',
                'id' => 11,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Seguridad',
                'updated_at' => '2024-02-29 15:35:35',
                'url' => '',
            ),
            11 => 
            array (
                'color' => '#000000',
                'created_at' => '2021-06-25 18:03:59',
                'icon_class' => 'voyager-refresh',
                'id' => 12,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'clear.cache',
                'target' => '_self',
                'title' => 'Limpiar cache',
                'updated_at' => '2022-05-24 15:06:32',
                'url' => '',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2022-05-24 15:21:21',
                'icon_class' => 'voyager-list',
                'id' => 13,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 11,
                'route' => 'voyager.permissions.index',
                'target' => '_self',
                'title' => 'Permisos',
                'updated_at' => '2022-05-24 15:21:31',
                'url' => '',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2024-02-28 16:44:22',
                'icon_class' => 'voyager-company',
                'id' => 14,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.organizations.index',
                'target' => '_self',
                'title' => 'Organizaciones',
                'updated_at' => '2024-02-28 16:44:38',
                'url' => '',
            ),
            14 => 
            array (
                'color' => '#000000',
                'created_at' => '2024-02-29 14:25:07',
                'icon_class' => 'voyager-location',
                'id' => 15,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => 'null',
                'parent_id' => 16,
                'route' => 'voyager.locations.index',
                'target' => '_self',
                'title' => 'Localizaciones',
                'updated_at' => '2024-02-29 15:14:29',
                'url' => '',
            ),
            15 => 
            array (
                'color' => '#000000',
                'created_at' => '2024-02-29 14:31:32',
                'icon_class' => 'voyager-params',
                'id' => 16,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Opcion rutas',
                'updated_at' => '2024-02-29 15:35:35',
                'url' => '',
            ),
            16 => 
            array (
                'color' => NULL,
                'created_at' => '2024-02-29 15:31:56',
                'icon_class' => 'voyager-forward',
                'id' => 18,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 16,
                'route' => 'voyager.routes.index',
                'target' => '_self',
                'title' => 'Rutas',
                'updated_at' => '2024-02-29 15:35:35',
                'url' => '',
            ),
        ));
        
        
    }
}