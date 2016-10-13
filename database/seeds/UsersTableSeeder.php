<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'nama_lengkap' => 'Clara Indriyani',
                'email' => 'clara.ara7@gmail.com',
                'password' => '$2y$10$lwDhsXv31iz9w49X8bnF8Ozz9L4FBOzM9Ef2y5c/wMMIUllfloa/a',
                'id_photo' => '',
                'deskripsi' => '',
                'total_point' => 0,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'nama_lengkap' => 'Clara',
                'email' => 'clara@gmail.com',
                'password' => 'sederhana',
                'id_photo' => '',
                'deskripsi' => '',
                'total_point' => 20,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'nama_lengkap' => 'gaga gaga',
                'email' => 'gaga@gmail.com',
                'password' => '123456',
                'id_photo' => '',
                'deskripsi' => '',
                'total_point' => 10,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'nama_lengkap' => 'Hoka Hoka Bento',
                'email' => 'hokahoka@bento.com',
                'password' => '53dbc6f6d0b764aa9f4727f9e918d11d',
                'id_photo' => 'uhokahoka@bento.com',
                'deskripsi' => '',
                'total_point' => 0,
                'isClient' => 1,
                'created_at' => '2016-05-23 09:48:45',
                'updated_at' => '2016-05-23 02:48:17',
            ),
            4 => 
            array (
                'nama_lengkap' => 'pplbaru',
                'email' => 'ppl@gmail.com',
                'password' => '123456',
                'id_photo' => '',
                'deskripsi' => 'ppl 2016',
                'total_point' => 10,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'nama_lengkap' => 'ram',
                'email' => 'ram@g.co',
                'password' => '123456',
                'id_photo' => '',
                'deskripsi' => '',
                'total_point' => 10,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'nama_lengkap' => 'tes',
                'email' => 'tes@gmail.com',
                'password' => '123456',
                'id_photo' => '',
                'deskripsi' => '',
                'total_point' => 10,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'nama_lengkap' => 'Tester',
                'email' => 'tester@gmail.com',
                'password' => '8e607a4752fa2e59413e5790536f2b42',
                'id_photo' => 'utester@gmail.com',
                'deskripsi' => '',
                'total_point' => 20,
                'isClient' => 0,
                'created_at' => '2016-05-23 11:38:25',
                'updated_at' => '2016-05-23 02:50:32',
            ),
            8 => 
            array (
                'nama_lengkap' => 'testing',
                'email' => 'testing@tes.com',
                'password' => 'testing',
                'id_photo' => '',
                'deskripsi' => '',
                'total_point' => 10,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'nama_lengkap' => 'vitri vitri',
                'email' => 'vitri@gmail.com',
                'password' => '123456',
                'id_photo' => '',
                'deskripsi' => '',
                'total_point' => 10,
                'isClient' => 0,
                'created_at' => '2016-05-17 22:52:04',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
