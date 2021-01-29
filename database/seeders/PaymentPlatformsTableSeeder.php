<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentPlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('payment_platforms')->insert([
        'name'=> 'PayPal',
        'image'=> 'img/payment-platforms/paypal.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       ]);
       DB::table('payment_platforms')->insert([
        'name'=> 'Stripe',
        'image'=> 'img/payment-platforms/stripe.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       ]);
    }
}
