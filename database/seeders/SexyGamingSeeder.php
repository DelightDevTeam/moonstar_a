<?php

namespace Database\Seeders;

use App\Models\Admin\GameList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexyGamingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'code' => 'MX-LIVE-001',
                'name' => 'Baccarat Classic',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-001.png',
            ],
            [
                'code' => 'MX-LIVE-002',
                'name' => 'Baccarat',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-002.png',
            ],
            [
                'code' => 'MX-LIVE-009',
                'name' => 'Roulette',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-009.png',
            ],
            [
                'code' => 'MX-LIVE-010',
                'name' => 'Red Blue Duel',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-010.png',
            ],
            [
                'code' => 'MX-LIVE-011',
                'name' => 'Teen Patti 2020',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-011.png',
            ],
            [
                'code' => 'MX-LIVE-012',
                'name' => 'Extra Andar Bahar',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-012.png',
            ],
            [
                'code' => 'MX-LIVE-014',
                'name' => 'Thai Hi Lo',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-014.png',
            ],
            [
                'code' => 'MX-LIVE-015',
                'name' => 'Thai Fish Prawn Crab',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-015.png',
            ],
            [
                'code' => 'MX-LIVE-016',
                'name' => 'Extra Sicbo',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-016.png',
            ],
            [
                'code' => 'MX-LIVE-017',
                'name' => 'Sedie',
                'game_type_id' => 2,
                'product_id' => 33,
                'image_url' => 'http://prodmd.9977997.com/Image/AWC/en/MX-LIVE-017.png',
            ],
        ];

        foreach ($games as $gameData) {
            GameList::create($gameData);
        }

    }
}
