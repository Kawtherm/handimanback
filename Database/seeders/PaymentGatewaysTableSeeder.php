<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentGatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('payment_gateways')->delete();

        \DB::table('payment_gateways')->insert(array (
            0 =>
            array (
                'created_at' => '2023-09-05 08:25:47',
                'id' => 1,
                'is_test' => 0,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'Cash on Delivery',
                'type' => 'cash',
                'updated_at' => '2023-09-05 08:25:47',
                'value' => NULL,
            ),
            1 =>
           array (
                'created_at' => '2023-09-05 08:26:22',
                'id' => 2,
                'is_test' => 1,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'Stripe Payment',
                'type' => 'stripe',
                'updated_at' => '2023-09-05 08:26:22',
                'value' => json_encode([
                    "stripe_url" => "https://api.stripe.com/v1/payment_intents",
                    "stripe_key" => "sk_test_CG2JhAIXvVWDeFUFqtUizO4N00zmvm7o8J",
                    "stripe_publickey" => "pk_test_HtQwwWoE9b43mfy5km6ThSPN00xunQv8J9"
                ])
            ),
            2 =>
            array (
                'created_at' => '2023-09-05 09:49:30',
                'id' => 3,
                'is_test' => 1,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'Razor Pay',
                'type' => 'razorPay',
                'updated_at' => '2023-09-05 09:49:30',
               'value' => json_encode([
                    "razor_url" => "https://api.razorpay.com/v1/orders",
                    "razor_key" => "rzp_test_imJFKkDpxlRid0",
                    "razor_secret" => "6LB1zRwMtF7llaPT0Qqn1agl"
                ]),
            ),
            3 =>
            array (
                'created_at' => '2023-09-05 09:50:14',
                'id' => 4,
                'is_test' => 1,
                'live_value' => NULL,
                'status' => 1,
                'title' => 'FlutterWave',
                'type' => 'flutterwave',
                'updated_at' => '2023-09-05 09:50:14',
                'value' => json_encode([
                    "flutterwave_url" => "https://api.flutterwave.com/v3/payments",
                    "flutterwave_public" => "FLWPUBK_TEST-3f85572590d20c752dfe4f125ef1f293-X",
                    "flutterwave_secret" => "FLWSECK_TEST-23cad2d37f31c5a6da937ac1246ae45f-X",
                    "flutterwave_encryption" => "FLWSECK_TEST76e735cbbc7c"
                ]),
            ),
        ));


    }
}
