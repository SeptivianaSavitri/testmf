<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('photos')->delete();
        
        \DB::table('photos')->insert(array (
            0 => 
            array (
                'id_photo' => 'uhokahoka@bento.com',
                'alamat' => NULL,
            ),
            1 => 
            array (
                'id_photo' => 'utester@gmail.com',
                'alamat' => NULL,
            ),
        ));
        
        
    }
}
