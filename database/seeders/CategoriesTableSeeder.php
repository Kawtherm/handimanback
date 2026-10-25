<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
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
                'color' => '#000000',
                'created_at' => '2023-09-04 12:55:09',
                'deleted_at' => NULL,
                'description' => 'Profitez d\'un confort optimal avec notre service de climatisation, entretien et installation de climatiseurs pour appartements et villas à Alger, Oran et Constantine.🔩 🪛',
                'id' => 9,
                'is_featured' => 1,
                'name' => 'Climatisation',
                'status' => 1,
                'category_image' => public_path('/images/category-images/ac_coolcare.png'),
                'updated_at' => '2023-09-04 12:55:15',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:56:14',
                'deleted_at' => NULL,
                'description' => 'Le couturier vous accompagne dans la confection et la retouche de vêtements, du karakou traditionnel aux tenues modernes, avec un savoir-faire algérien reconnu. 🧥🥻👔',
                'id' => 10,
                'is_featured' => 0,
                'name' => 'Couturier',
                'status' => 1,
                'category_image' => public_path('/images/category-images/tailor.png'),
                'updated_at' => '2023-09-04 12:56:14',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:57:10',
                'deleted_at' => NULL,
                'description' => 'La maison connectée vous ouvre les portes de l\'automatisation : éclairage intelligent, caméras de surveillance et domotique adaptés aux logements algériens. 📱',
                'id' => 11,
                'is_featured' => 0,
                'name' => 'Maison Connectée',
                'status' => 1,
                'category_image' => public_path('/images/category-images/smart_home.png'),
                'updated_at' => '2023-09-04 12:57:10',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:57:44',
                'deleted_at' => NULL,
                'description' => 'Assurez la sécurité de vos locaux et de votre famille avec nos agents de gardiennage, disponibles pour villas, commerces et résidences à travers le pays.👮🏻',
                'id' => 12,
                'is_featured' => 0,
                'name' => 'Gardiennage',
                'status' => 1,
                'category_image' => public_path('/images/category-images/security_guard.png'),
                'updated_at' => '2023-09-04 12:57:44',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:58:07',
                'deleted_at' => NULL,
                'description' => 'La désinfection et l\'hygiène de vos espaces, maisons, écoles et locaux professionnels, avec des produits adaptés et des interventions régulières.🧴',
                'id' => 13,
                'is_featured' => 0,
                'name' => 'Désinfection',
                'status' => 1,
                'category_image' => public_path('/images/category-images/sanitization.png'),
                'updated_at' => '2023-09-04 12:58:07',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:58:27',
                'deleted_at' => NULL,
                'description' => 'Le salon de coiffure et de beauté : coiffure, soins, hammam et mise en beauté pour femmes et hommes, dans le respect des traditions et des tendances. ✂️',
                'id' => 14,
                'is_featured' => 0,
                'name' => 'Salon de Coiffure',
                'status' => 1,
                'category_image' => public_path('/images/category-images/salon.png'),
                'updated_at' => '2023-09-04 12:58:27',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:58:53',
                'deleted_at' => NULL,
                'description' => 'La photographie pour vos mariages, fiançailles, henné et événements familiaux, avec des photographes professionnels à Alger, Oran et Constantine. 📸',
                'id' => 15,
                'is_featured' => 0,
                'name' => 'Photographie',
                'status' => 1,
                'category_image' => public_path('/images/category-images/photography.png'),
                'updated_at' => '2023-09-04 12:58:53',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:59:13',
                'deleted_at' => NULL,
                'description' => 'La lutte contre les nuisibles (cafards, rongeurs, moustiques) avec des traitements efficaces et sécurisés pour votre maison ou local. 🪲🪳',
                'id' => 16,
                'is_featured' => 0,
                'name' => 'Dératisation',
                'status' => 1,
                'category_image' => public_path('/images/category-images/pest_control.png'),
                'updated_at' => '2023-09-04 12:59:13',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 12:59:31',
                'deleted_at' => NULL,
                'description' => 'Le cheikh vous accompagne lors des cérémonies religieuses, mariages et rites traditionnels, avec respect et savoir-faire.🔥',
                'id' => 17,
                'is_featured' => 0,
                'name' => 'Cheikh / Cérémonies',
                'status' => 1,
                'category_image' => public_path('/images/category-images/pandit.png'),
                'updated_at' => '2023-09-04 12:59:31',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:00:04',
                'deleted_at' => NULL,
                'description' => 'La peinture pour vos murs et façades : travaux soignés, choix des couleurs et finitions de qualité pour habitations et locaux professionnels.🖌️🎨',
                'id' => 18,
                'is_featured' => 1,
                'name' => 'Peintre',
                'status' => 1,
                'category_image' => public_path('/images/category-images/painter.png'),
                'updated_at' => '2023-09-04 13:06:10',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:00:26',
                'deleted_at' => NULL,
                'description' => 'Le nettoyage et la blanchisserie de vos vêtements, draps et tapis, avec ramassage et livraison à domicile dans les grandes villes.🧼',
                'id' => 19,
                'is_featured' => 0,
                'name' => 'Blanchisserie',
                'status' => 1,
                'category_image' => public_path('/images/category-images/laundry.png'),
                'updated_at' => '2023-09-04 13:00:26',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:00:55',
                'deleted_at' => NULL,
                'description' => 'Le jardinier s\'occupe de l\'entretien de vos espaces verts, tailles, plantations et aménagement de jardins adaptés au climat algérien. 🏡⛏️',
                'id' => 20,
                'is_featured' => 0,
                'name' => 'Jardinier',
                'status' => 1,
                'category_image' => public_path('/images/category-images/gardener.png'),
                'updated_at' => '2023-09-04 13:05:54',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:01:27',
                'deleted_at' => NULL,
                'description' => 'L\'entretien automobile : vidange, révision, lavage et réparation légère pour garder votre véhicule en bon état, à domicile ou en garage. 🚛🚙',
                'id' => 21,
                'is_featured' => 0,
                'name' => 'Entretien Automobile',
                'status' => 1,
                'category_image' => public_path('/images/category-images/automotive_care.png'),
                'updated_at' => '2023-09-04 13:01:27',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:02:07',
                'deleted_at' => NULL,
                'description' => 'La cuisine et les repas de fêtes : couscous, pâtisseries traditionnelles et plats algériens préparés à la maison pour vos événements. 🫕🍲',
                'id' => 22,
                'is_featured' => 1,
                'name' => 'Cuisine',
                'status' => 1,
                'category_image' => public_path('/images/category-images/cooking.png'),
                'updated_at' => '2023-09-04 13:02:10',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:02:54',
                'deleted_at' => NULL,
                'description' => 'Le plombier intervient pour vos fuites, installations sanitaires et réparations de tuyauterie, dans les appartements et maisons à travers l\'Algérie. 🛠️',
                'id' => 23,
                'is_featured' => 1,
                'name' => 'Plombier',
                'status' => 1,
                'category_image' => public_path('/images/category-images/plumber.png'),
                'updated_at' => '2023-09-04 13:02:54',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:03:21',
                'deleted_at' => NULL,
                'description' => 'Le nettoyage complet de votre maison, appartement ou local : sols, vitres, sanitaires et finitions, avec des produits efficaces. 🧼🧽🧹🧻',
                'id' => 24,
                'is_featured' => 1,
                'name' => 'Nettoyage',
                'status' => 1,
                'category_image' => public_path('/images/category-images/cleaning.png'),
                'updated_at' => '2023-09-04 13:03:21',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:04:01',
                'deleted_at' => NULL,
                'description' => 'L\'électricien pour vos installations, dépannages et mises aux normes : câblage, prises, tableaux électriques et éclairage. 💡🪛🔌',
                'id' => 25,
                'is_featured' => 1,
                'name' => 'Électricien',
                'status' => 1,
                'category_image' => public_path('/images/category-images/electrician.png'),
                'updated_at' => '2023-09-04 13:06:04',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:04:41',
                'deleted_at' => NULL,
                'description' => 'Le menuisier travaille le bois pour vos meubles, portes, fenêtres et cuisines, en alliant savoir-faire artisanal et finitions modernes. 🪛 🪚',
                'id' => 26,
                'is_featured' => 1,
                'name' => 'Menuisier',
                'status' => 1,
                'category_image' => public_path('/images/category-images/carpenter.png'),
                'updated_at' => '2023-09-04 13:04:53',
            ],
            [
                'color' => '#000000',
                'created_at' => '2023-09-04 13:05:01',
                'deleted_at' => NULL,
                'description' => 'Ces prestations sont réalisées à distance (en ligne). 🧑🏻‍🔧🔧🪛',
                'id' => 27,
                'is_featured' => 1,
                'name' => 'Services à Distance',
                'status' => 1,
                'category_image' => public_path('/images/category-images/remote_service.png'),
                'updated_at' => '2023-09-04 13:05:01',
            ],
        ];
        
        foreach ($data as $key => $val) {
            $featureImage = $val['category_image'] ?? null;
            $categoryData = Arr::except($val, ['category_image']);
            $category = Category::create($categoryData);
            if (isset($featureImage)) {
                $this->attachFeatureImage($category, $featureImage);
            }
        } 
    }

    private function attachFeatureImage($model, $publicPath)
    {

        $file = new \Illuminate\Http\File($publicPath);

        $media = $model->addMedia($file)->preservingOriginal()->toMediaCollection('category_image');

        return $media;

    }
}