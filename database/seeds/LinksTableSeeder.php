<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 4,
                'display' => 'Admins',
                'url' => 'Admin',
                'created_at' => NULL,
                'updated_at' => '2016-04-27 12:52:37',
                'main' => 1,
            ),
            1 => 
            array (
                'id' => 5,
                'display' => 'restoranss',
                'url' => 'restorans',
                'created_at' => '2016-04-10 12:52:23',
                'updated_at' => '2016-04-10 12:52:23',
                'main' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'display' => 'menuss',
                'url' => 'menus',
                'created_at' => '2016-04-10 14:15:37',
                'updated_at' => '2016-04-10 14:15:37',
                'main' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'display' => 'reviewss',
                'url' => 'reviews',
                'created_at' => '2016-05-01 15:47:48',
                'updated_at' => '2016-05-01 15:47:48',
                'main' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'display' => 'promoss',
                'url' => 'promos',
                'created_at' => '2016-05-20 16:50:11',
                'updated_at' => '2016-05-20 16:50:11',
                'main' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'display' => 'userss',
                'url' => 'users',
                'created_at' => '2016-05-23 02:02:03',
                'updated_at' => '2016-05-23 02:02:03',
                'main' => NULL,
            ),
        ));
        
        
    }
}
