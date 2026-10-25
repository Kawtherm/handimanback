<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Adrar',
                'country_id' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Chlef',
                'country_id' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Laghouat',
                'country_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Oum El Bouaghi',
                'country_id' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Batna',
                'country_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bejaia',
                'country_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Biskra',
                'country_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Bechar',
                'country_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Blida',
                'country_id' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Bouira',
                'country_id' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Tamanrasset',
                'country_id' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Tebessa',
                'country_id' => 3,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Tlemcen',
                'country_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Tiaret',
                'country_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Tizi Ouzou',
                'country_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Alger',
                'country_id' => 3,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Djelfa',
                'country_id' => 3,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Jijel',
                'country_id' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Setif',
                'country_id' => 3,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Saida',
                'country_id' => 3,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Skikda',
                'country_id' => 3,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Sidi Bel Abbes',
                'country_id' => 3,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Annaba',
                'country_id' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Guelma',
                'country_id' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Constantine',
                'country_id' => 3,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Medea',
                'country_id' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Mostaganem',
                'country_id' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'M\'Sila',
                'country_id' => 3,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Mascara',
                'country_id' => 3,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Ouargla',
                'country_id' => 3,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Oran',
                'country_id' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'El Bayadh',
                'country_id' => 3,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Illizi',
                'country_id' => 3,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Bordj Bou Arreridj',
                'country_id' => 3,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Boumerdes',
                'country_id' => 3,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'El Tarf',
                'country_id' => 3,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Tindouf',
                'country_id' => 3,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Tissemsilt',
                'country_id' => 3,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'El Oued',
                'country_id' => 3,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Khenchela',
                'country_id' => 3,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Souk Ahras',
                'country_id' => 3,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Tipaza',
                'country_id' => 3,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Mila',
                'country_id' => 3,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Ain Defla',
                'country_id' => 3,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Naama',
                'country_id' => 3,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Ain Temouchent',
                'country_id' => 3,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Ghardaia',
                'country_id' => 3,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Relizane',
                'country_id' => 3,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Timimoun',
                'country_id' => 3,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Bordj Badji Mokhtar',
                'country_id' => 3,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Ouled Djellal',
                'country_id' => 3,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Beni Abbes',
                'country_id' => 3,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'In Salah',
                'country_id' => 3,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'In Guezzam',
                'country_id' => 3,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Touggourt',
                'country_id' => 3,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Djanet',
                'country_id' => 3,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'El M\'Ghair',
                'country_id' => 3,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'El Meniaa',
                'country_id' => 3,
            ),
        ));
        
        
    }
}