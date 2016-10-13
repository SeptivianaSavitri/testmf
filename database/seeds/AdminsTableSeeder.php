<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'admin@change.me',
                'password' => '$2y$10$jdqdFoxGYjCGUQXUHgZ62e7EFECJNR38UCBCqtag.4vF4THhFtzJK',
                'permissions' => NULL,
                'activated' => 0,
                'activation_code' => NULL,
                'activated_at' => NULL,
                'last_login' => NULL,
                'persist_code' => NULL,
                'reset_password_code' => NULL,
                'remember_token' => 'WdinHL5QQpopfWPk9sho41wV66xT4OxvuQv9FtSnIZiz9GO5dE4rBPm4NLGz',
                'first_name' => NULL,
                'last_name' => NULL,
                'created_at' => '2016-04-10 12:35:46',
                'updated_at' => '2016-04-10 12:48:07',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'admin@margofoodies.com',
                'password' => '$2y$10$0uklgLvTqwUWWn9WaqTNb.s.Rbaeog6EOe6tuawsvKiZXZBO6KBJW',
                'permissions' => NULL,
                'activated' => 0,
                'activation_code' => NULL,
                'activated_at' => NULL,
                'last_login' => NULL,
                'persist_code' => NULL,
                'reset_password_code' => NULL,
                'remember_token' => 'QgR0hCZZEyvzu8ujoxCgT8gzQgIoNCCKtdQqU5NAWFsI5gwTD5gKfulykIf4',
                'first_name' => 'margo',
                'last_name' => 'foodies',
                'created_at' => '2016-04-10 12:36:59',
                'updated_at' => '2016-05-14 14:00:14',
            ),
        ));
        
        
    }
}
