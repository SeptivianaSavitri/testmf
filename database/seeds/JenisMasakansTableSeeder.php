<?php

use Illuminate\Database\Seeder;

class JenisMasakansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jenis_masakans')->delete();
        
        \DB::table('jenis_masakans')->insert(array (
            0 => 
            array (
                'id_restoran' => '001',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'id_restoran' => '001',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'id_restoran' => '002',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'id_restoran' => '002',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'id_restoran' => '003',
                'jenis_masakan' => 'Asian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'id_restoran' => '003',
                'jenis_masakan' => 'Coffee',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'id_restoran' => '003',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'id_restoran' => '003',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'id_restoran' => '003',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'id_restoran' => '004',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'id_restoran' => '005',
                'jenis_masakan' => 'Coffee',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'id_restoran' => '005',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'id_restoran' => '006',
                'jenis_masakan' => 'Bakery',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'id_restoran' => '007',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'id_restoran' => '007',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'id_restoran' => '007',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'id_restoran' => '007',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'id_restoran' => '008',
                'jenis_masakan' => 'Asian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'id_restoran' => '008',
                'jenis_masakan' => 'Coffee',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'id_restoran' => '008',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'id_restoran' => '008',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'id_restoran' => '008',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'id_restoran' => '009',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'id_restoran' => '009',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'id_restoran' => '009',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'id_restoran' => '010',
                'jenis_masakan' => 'Asian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'id_restoran' => '010',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'id_restoran' => '011',
                'jenis_masakan' => 'Bakery',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'id_restoran' => '011',
                'jenis_masakan' => 'Coffee',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'id_restoran' => '011',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'id_restoran' => '011',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'id_restoran' => '012',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'id_restoran' => '012',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'id_restoran' => '012',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'id_restoran' => '013',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'id_restoran' => '014',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'id_restoran' => '014',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'id_restoran' => '015',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'id_restoran' => '015',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'id_restoran' => '016',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'id_restoran' => '016',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'id_restoran' => '017',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'id_restoran' => '018',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'id_restoran' => '019',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'id_restoran' => '020',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'id_restoran' => '021',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'id_restoran' => '022',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'id_restoran' => '023',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'id_restoran' => '033',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'id_restoran' => '034',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'id_restoran' => '034',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'id_restoran' => '035',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'id_restoran' => '036',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'id_restoran' => '036',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'id_restoran' => '037',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'id_restoran' => '038',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'id_restoran' => '039',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'id_restoran' => '040',
                'jenis_masakan' => 'Bakery',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'id_restoran' => '041',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'id_restoran' => '042',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'id_restoran' => '043',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'id_restoran' => '044',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'id_restoran' => '044',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'id_restoran' => '045',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'id_restoran' => '046',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'id_restoran' => '047',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'id_restoran' => '048',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'id_restoran' => '048',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'id_restoran' => '049',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'id_restoran' => '050',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'id_restoran' => '051',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'id_restoran' => '052',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'id_restoran' => '053',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'id_restoran' => '054',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'id_restoran' => '055',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'id_restoran' => '056',
                'jenis_masakan' => 'Japanese',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'id_restoran' => '057',
                'jenis_masakan' => 'Indonesian',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'id_restoran' => '057',
                'jenis_masakan' => 'Other',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'id_restoran' => '057',
                'jenis_masakan' => 'Western',
                'created_at' => '2016-05-17 22:36:46',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
