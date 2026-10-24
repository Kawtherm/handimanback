<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AlgerianWilayasSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Disable foreign key checks so we can truncate the table
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // 2. Clear the table to prevent duplicate entries
        DB::table('service_zones')->truncate();
        
        // 3. Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // List of the 58 wilayas with approximate center coordinates (Lat, Lng)
        $wilayas = [
            ['name' => 'Adrar', 'lat' => 27.8743, 'lng' => -0.2939],
            ['name' => 'Chlef', 'lat' => 36.1647, 'lng' => 1.3317],
            ['name' => 'Laghouat', 'lat' => 33.8000, 'lng' => 2.8650],
            ['name' => 'Oum El Bouaghi', 'lat' => 35.8750, 'lng' => 7.1136],
            ['name' => 'Batna', 'lat' => 35.5550, 'lng' => 6.1741],
            ['name' => 'Béjaïa', 'lat' => 36.7500, 'lng' => 5.0833],
            ['name' => 'Biskra', 'lat' => 34.8500, 'lng' => 5.7333],
            ['name' => 'Béchar', 'lat' => 31.6167, 'lng' => -2.2167],
            ['name' => 'Blida', 'lat' => 36.4700, 'lng' => 2.8300],
            ['name' => 'Bouira', 'lat' => 36.3740, 'lng' => 3.9020],
            ['name' => 'Tamanrasset', 'lat' => 22.7850, 'lng' => 5.5228],
            ['name' => 'Tébessa', 'lat' => 35.4042, 'lng' => 8.1244],
            ['name' => 'Tlemcen', 'lat' => 34.8783, 'lng' => -1.3150],
            ['name' => 'Tiaret', 'lat' => 35.3711, 'lng' => 1.3170],
            ['name' => 'Tizi Ouzou', 'lat' => 36.7118, 'lng' => 4.0435],
            ['name' => 'Algiers', 'lat' => 36.7538, 'lng' => 3.0588],
            ['name' => 'Djelfa', 'lat' => 34.6667, 'lng' => 3.2500],
            ['name' => 'Jijel', 'lat' => 36.8200, 'lng' => 5.7667],
            ['name' => 'Sétif', 'lat' => 36.1900, 'lng' => 5.4100],
            ['name' => 'Saïda', 'lat' => 34.8303, 'lng' => 0.1517],
            ['name' => 'Skikda', 'lat' => 36.8761, 'lng' => 6.9094],
            ['name' => 'Sidi Bel Abbès', 'lat' => 35.1897, 'lng' => -0.6414],
            ['name' => 'Annaba', 'lat' => 36.9000, 'lng' => 7.7667],
            ['name' => 'Guelma', 'lat' => 36.4625, 'lng' => 7.4262],
            ['name' => 'Constantine', 'lat' => 36.3650, 'lng' => 6.6147],
            ['name' => 'Médéa', 'lat' => 36.2675, 'lng' => 2.7500],
            ['name' => 'Mostaganem', 'lat' => 35.9315, 'lng' => 0.0892],
            ['name' => 'M’Sila', 'lat' => 35.7050, 'lng' => 4.5419],
            ['name' => 'Mascara', 'lat' => 35.3975, 'lng' => 0.1400],
            ['name' => 'Ouargla', 'lat' => 31.9500, 'lng' => 5.3167],
            ['name' => 'Oran', 'lat' => 35.6969, 'lng' => -0.6331],
            ['name' => 'El Bayadh', 'lat' => 33.6800, 'lng' => 1.0200],
            ['name' => 'Illizi', 'lat' => 26.4833, 'lng' => 8.4667],
            ['name' => 'Bordj Bou Arréridj', 'lat' => 36.0731, 'lng' => 4.7608],
            ['name' => 'Boumerdès', 'lat' => 36.7664, 'lng' => 3.4772],
            ['name' => 'El Tarf', 'lat' => 36.7672, 'lng' => 8.3136],
            ['name' => 'Tindouf', 'lat' => 27.6742, 'lng' => -8.1478],
            ['name' => 'Tissemsilt', 'lat' => 35.6072, 'lng' => 1.8111],
            ['name' => 'El Oued', 'lat' => 33.3683, 'lng' => 6.8674],
            ['name' => 'Khenchela', 'lat' => 35.4361, 'lng' => 7.1433],
            ['name' => 'Souk Ahras', 'lat' => 36.2864, 'lng' => 7.9511],
            ['name' => 'Tipaza', 'lat' => 36.5894, 'lng' => 2.4478],
            ['name' => 'Mila', 'lat' => 36.4503, 'lng' => 6.2644],
            ['name' => 'Aïn Defla', 'lat' => 36.2642, 'lng' => 1.9678],
            ['name' => 'Naâma', 'lat' => 33.2667, 'lng' => -0.3167],
            ['name' => 'Aïn Témouchent', 'lat' => 35.2986, 'lng' => -1.1400],
            ['name' => 'Ghardaïa', 'lat' => 32.4900, 'lng' => 3.6700],
            ['name' => 'Relizane', 'lat' => 35.7372, 'lng' => 0.5556],
            ['name' => 'Timimoun', 'lat' => 29.2639, 'lng' => 0.2306],
            ['name' => 'Bordj Badji Mokhtar', 'lat' => 21.3287, 'lng' => 0.9545],
            ['name' => 'Ouled Djellal', 'lat' => 34.4167, 'lng' => 5.0667],
            ['name' => 'Béni Abbès', 'lat' => 30.1300, 'lng' => -2.1700],
            ['name' => 'In Salah', 'lat' => 27.1953, 'lng' => 2.4786],
            ['name' => 'In Guezzam', 'lat' => 19.5686, 'lng' => 5.7722],
            ['name' => 'Touggourt', 'lat' => 33.1000, 'lng' => 6.0667],
            ['name' => 'Djanet', 'lat' => 24.5542, 'lng' => 9.4844],
            ['name' => 'El M’Ghair', 'lat' => 33.9500, 'lng' => 5.9167],
            ['name' => 'El Meniaa', 'lat' => 30.5833, 'lng' => 2.8833],
        ];

        $now = Carbon::now();
        $insertData = [];

        foreach ($wilayas as $index => $wilaya) {
            // Create a small bounding box (polygon) around the center point
            $delta = 0.5;
            $lat = $wilaya['lat'];
            $lng = $wilaya['lng'];

            $coordinates = [
                ['lat' => $lat + $delta, 'lng' => $lng - $delta],
                ['lat' => $lat + $delta, 'lng' => $lng + $delta],
                ['lat' => $lat - $delta, 'lng' => $lng + $delta],
                ['lat' => $lat - $delta, 'lng' => $lng - $delta],
            ];

            $insertData[] = [
                'id' => $index + 1,
                'name' => $wilaya['name'] . ', Algeria',
                'coordinates' => json_encode($coordinates),
                'status' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('service_zones')->insert($insertData);
    }
}