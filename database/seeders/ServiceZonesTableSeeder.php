<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('service_zones')->delete();

        \DB::table('service_zones')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Alger, Algérie',
                'coordinates' => '"[{\\"lat\\":36.850000,\\"lng\\":2.850000},{\\"lat\\":36.650000,\\"lng\\":2.850000},{\\"lat\\":36.650000,\\"lng\\":3.250000},{\\"lat\\":36.850000,\\"lng\\":3.250000}]"',
                'status' => 1,
                'created_at' => '2025-06-20 13:27:05',
                'updated_at' => '2025-06-20 13:27:05',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Oran, Algérie',
                'coordinates' => '"[{\\"lat\\":35.800000,\\"lng\\":-0.850000},{\\"lat\\":35.600000,\\"lng\\":-0.850000},{\\"lat\\":35.600000,\\"lng\\":-0.400000},{\\"lat\\":35.800000,\\"lng\\":-0.400000}]"',
                'status' => 1,
                'created_at' => '2025-06-20 13:28:06',
                'updated_at' => '2025-06-20 13:28:06',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Constantine, Algérie',
                'coordinates' => '"[{\\"lat\\":36.450000,\\"lng\\":6.450000},{\\"lat\\":36.250000,\\"lng\\":6.450000},{\\"lat\\":36.250000,\\"lng\\":6.850000},{\\"lat\\":36.450000,\\"lng\\":6.850000}]"',
                'status' => 1,
                'created_at' => '2025-06-20 13:39:03',
                'updated_at' => '2025-06-20 13:39:03',
                'deleted_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Annaba, Algérie',
                'coordinates' => '"[{\\"lat\\":37.000000,\\"lng\\":7.600000},{\\"lat\\":36.800000,\\"lng\\":7.600000},{\\"lat\\":36.800000,\\"lng\\":7.950000},{\\"lat\\":37.000000,\\"lng\\":7.950000}]"',
                'status' => 1,
                'created_at' => '2025-06-20 13:39:40',
                'updated_at' => '2025-06-20 13:44:25',
                'deleted_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Blida, Algérie',
                'coordinates' => '"[{\\"lat\\":36.600000,\\"lng\\":2.650000},{\\"lat\\":36.350000,\\"lng\\":2.650000},{\\"lat\\":36.350000,\\"lng\\":3.050000},{\\"lat\\":36.600000,\\"lng\\":3.050000}]"',
                'status' => 1,
                'created_at' => '2025-06-20 13:41:04',
                'updated_at' => '2025-06-20 13:41:04',
                'deleted_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Sétif, Algérie',
                'coordinates' => '"[{\\"lat\\":36.350000,\\"lng\\":5.200000},{\\"lat\\":36.050000,\\"lng\\":5.200000},{\\"lat\\":36.050000,\\"lng\\":5.650000},{\\"lat\\":36.350000,\\"lng\\":5.650000}]"',
                'status' => 1,
                'created_at' => '2025-06-20 13:46:49',
                'updated_at' => '2025-06-20 13:46:49',
                'deleted_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Tlemcen, Algérie',
                'coordinates' => '"[{\\"lat\\":35.000000,\\"lng\\":-1.550000},{\\"lat\\":34.750000,\\"lng\\":-1.550000},{\\"lat\\":34.750000,\\"lng\\":-1.100000},{\\"lat\\":35.000000,\\"lng\\":-1.100000}]"',
                'status' => 1,
                'created_at' => '2025-06-20 13:49:49',
                'updated_at' => '2025-06-20 13:49:49',
                'deleted_at' => NULL,
            ),
        ));
    }
}