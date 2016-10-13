<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 5,
                'email' => 'hokahoka@bento.com',
                'id_menu' => '1',
                'isi_review' => 'lalala',
                'rate' => '2',
                'status' => 0,
            ),
            1 => 
            array (
                'id' => 6,
                'email' => 'clara@gmail.com',
                'id_menu' => '1',
                'isi_review' => 'asik',
                'rate' => '1',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 7,
                'email' => 'tester@gmail.com',
                'id_menu' => '711',
                'isi_review' => 'capek deh',
                'rate' => '1',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 8,
                'email' => 'tester@gmail.com',
                'id_menu' => '1',
                'isi_review' => 'boleh boleh',
                'rate' => '3',
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 9,
                'email' => 'tester@gmail.com',
                'id_menu' => '36',
                'isi_review' => 'nasinya pulen',
                'rate' => '1',
                'status' => 1,
            ),
        ));
        
        
    }
}
