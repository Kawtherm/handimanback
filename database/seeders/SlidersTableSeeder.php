<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            [
                'created_at' => '2022-02-23 09:05:27',
                'deleted_at' => NULL,
                'description' => 'Donnez un nouveau souffle à votre intérieur avec nos artisans peintres à Alger, Oran et Constantine. Nous mettons en valeur le charme des habitations algériennes, du style casbah aux villas modernes. ?‍?',
                'id' => 1,
                'status' => 1,
                'title' => 'Service de Peinture Intérieure',
                'type' => 'service',
                'type_id' => '81',
                'updated_at' => '2023-10-03 10:41:33',
                'slider_image' => public_path('/images/slider/1.png'),
            ],
            [
                'created_at' => '2022-02-23 09:21:08',
                'deleted_at' => NULL,
                'description' => 'Découvrez des meubles et objets de décoration adaptés à votre style, entre artisanat traditionnel algérien et design contemporain. Livraison disponible à travers le pays. ?',
                'id' => 2,
                'status' => 1,
                'title' => 'Achat de Meubles et Décoration',
                'type' => 'service',
                'type_id' => '15',
                'updated_at' => '2023-10-03 11:24:31',
                'slider_image' => public_path('/images/slider/2.png'),
            ],
            [
                'created_at' => '2022-02-23 09:23:23',
                'deleted_at' => NULL,
                'description' => 'Créez des pièces uniques avec notre service de conception et fabrication sur mesure, inspiré du savoir-faire algérien : bois sculpté, fer forgé, tissages et plus encore. ??',
                'id' => 3,
                'status' => 1,
                'title' => 'Conception et Fabrication Sur Mesure',
                'type' => 'service',
                'type_id' => '16',
                'updated_at' => '2023-10-03 11:25:40',
                'slider_image' => public_path('/images/slider/3.jpg'),
            ],
            [
                'created_at' => '2022-02-23 09:25:11',
                'deleted_at' => NULL,
                'description' => 'Optimisez l’espace de votre maison ou appartement avec nos experts en aménagement, en tenant compte des spécificités des logements algériens et de votre budget. ?',
                'id' => 4,
                'status' => 1,
                'title' => 'Aménagement et Planification d’Espace',
                'type' => 'service',
                'type_id' => '50',
                'updated_at' => '2023-10-03 11:25:53',
                'slider_image' => public_path('/images/slider/4.png'),
            ],
        ];
        
        foreach ($data as $key => $val) {
            $featureImage = $val['slider_image'] ?? null;
            $sliderData = Arr::except($val, ['slider_image']);
            $slider = Slider::create($sliderData);
            if (isset($featureImage)) {
                $this->attachFeatureImage($slider, $featureImage);
            }
        } 
    }
    private function attachFeatureImage($model, $publicPath)
    {

        $file = new \Illuminate\Http\File($publicPath);

        $media = $model->addMedia($file)->preservingOriginal()->toMediaCollection('slider_image');

        return $media;

    }
}