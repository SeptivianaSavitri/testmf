<?php

use Illuminate\Database\Seeder;

class AdminRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role')->delete();
        
        \DB::table('admin_role')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'admin_id' => 1,
            ),
            1 => 
            array (
                'role_id' => 1,
                'admin_id' => 2,
            ),
        ));
        
        
    }
}
