<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'KBZ Pay',
                'image' => 'kpay.png',
            ],
            [
                'name' => 'Wave Pay',
                'image' => 'wave.png',
            ],
            [
                'name' => 'AYA Bank',
                'image' => 'ayabanking.png',
            ],
            [
                'name' => 'AYA Pay',
                'image' => 'ayapay.png',
            ],
            [
                'name' => 'CB Bank',
                'image' => 'cbbanking.png',
            ],
            [
                'name' => 'CB Pay',
                'image' => 'cbpay.png',
            ],
            [
                'name' => 'MAB Bank',
                'image' => 'mabbanking.png',
            ],
            [
                'name' => 'UAB Pay',
                'image' => 'uabpay.png',
            ],
            [
                'name' => 'YOMA Bank',
                'image' => 'yomabanking.png',
            ],
        ];

        DB::table('payment_types')->insert($types);
    }
}
