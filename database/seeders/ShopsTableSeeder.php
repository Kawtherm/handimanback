<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\Service;

class ShopsTableSeeder extends Seeder
{
    public function run(): void
    {
        $shops = [
            [
                'provider_id' => 4,
                'shop_name' => 'EURL Benali Bricolage',
                'country_id' => 3,
                'state_id' => 16,
                'city_id' => 1601,
                'address' => '12 Rue Didouche Mourad, Alger Centre, Alger',
                'lat' => 36.7538,
                'long' => 3.0588,
                'registration_number' => 'RC-16/00-45678B24',
                'shop_start_time' => '09:00',
                'shop_end_time' => '18:00',
                'contact_number' => '+213 21 55 01 01',
                'email' => 'contact@benalibricolage.dz',
                'is_active' => 1,
                'shop_attachment' => public_path('/images/shops/image1.jpg'),
                'service_ids' => [15, 18, 22, 27, 31],
            ],
            [
                'provider_id' => 16,
                'shop_name' => 'SARL Mansouri Home Services',
                'country_id' => 3,
                'state_id' => 31,
                'city_id' => 3101,
                'address' => '45 Boulevard Emir Abdelkader, Oran',
                'lat' => 35.6971,
                'long' => -0.6308,
                'registration_number' => 'RC-31/00-98765B24',
                'shop_start_time' => '09:00',
                'shop_end_time' => '18:00',
                'contact_number' => '+213 41 55 02 02',
                'email' => 'support@mansouri-services.dz',
                'is_active' => 1,
                'shop_attachment' => public_path('/images/shops/image2.jpg'),
                'service_ids' => [13, 73],
            ],
            [
                'provider_id' => 17,
                'shop_name' => 'EURL Khelifi Immobilier',
                'country_id' => 3,
                'state_id' => 25,
                'city_id' => 2501,
                'address' => '789 Rue Larbi Ben Mhidi, Constantine',
                'lat' => 36.3650,
                'long' => 6.6147,
                'registration_number' => 'RC-25/00-11223B24',
                'shop_start_time' => '09:00',
                'shop_end_time' => '18:00',
                'contact_number' => '+213 31 55 03 03',
                'email' => 'info@khelifi-immobilier.dz',
                'is_active' => 1,
                'shop_attachment' => public_path('/images/shops/image3.jpg'),
                'service_ids' => [47, 79],
            ],
            [
                'provider_id' => 7,
                'shop_name' => 'Atelier Boudiaf Réparations',
                'country_id' => 3,
                'state_id' => 23,
                'city_id' => 2301,
                'address' => '22 Avenue de la Soummam, Annaba',
                'lat' => 36.9000,
                'long' => 7.7667,
                'registration_number' => 'RC-23/00-44556B24',
                'shop_start_time' => '09:00',
                'shop_end_time' => '18:00',
                'contact_number' => '+213 38 55 04 04',
                'email' => 'contact@boudiaf-reparations.dz',
                'is_active' => 1,
                'shop_attachment' => public_path('/images/shops/image4.jpg'),
                'service_ids' => [74],
            ],
            [
                'provider_id' => 4,
                'shop_name' => 'Travaux Zerrouki',
                'country_id' => 3,
                'state_id' => 9,
                'city_id' => 901,
                'address' => '5 Rue des Frères Bouadou, Blida',
                'lat' => 36.4703,
                'long' => 2.8277,
                'registration_number' => 'RC-09/00-48678B24',
                'shop_start_time' => '09:00',
                'shop_end_time' => '18:00',
                'contact_number' => '+213 25 55 05 05',
                'email' => 'contact@zerrouki-travaux.dz',
                'is_active' => 1,
                'shop_attachment' => public_path('/images/shops/image5.jpg'),
                'service_ids' => [25, 29, 33],
            ],
        ];

        foreach ($shops as $data) {
            $serviceIds = $data['service_ids'] ?? [];
            $shopAttachment = $data['shop_attachment'] ?? null;

            unset($data['service_ids'], $data['shop_attachment']);

            $shop = Shop::create($data);

            if ($shopAttachment && file_exists($shopAttachment)) {
                storeMediaFile($shop, $shopAttachment, 'shop_attachment');
            }

            if (!empty($serviceIds)) {
                $shop->services()->attach($serviceIds);
                Service::whereIn('id', $serviceIds)->update(['visit_type' => 'on_shop']);
            }
        }
    }
}