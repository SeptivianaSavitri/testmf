<?php

use Illuminate\Database\Seeder;

class PointHistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('point_history')->delete();
        
        \DB::table('point_history')->insert(array (
            0 => 
            array (
                'email' => 'tester@g',
                'id_point' => 'PFL',
                'waktu' => '2016-05-23 02:50:42',
                'nominal_poin' => 10,
                'nama_transaksi' => 'login',
            ),
        ));
        
        
    }
}
