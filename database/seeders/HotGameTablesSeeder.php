<?php

namespace Database\Seeders;

use App\Models\Admin\GameList;
use App\Models\HotGame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotGameTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'GameCode' => 'vs20olympx',
                'GameName' => 'Gates of Olympus 1000',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20olympx.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20olympgate',
                'GameName' => 'Gates of Olympus',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20olympgate.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

            [
                'GameCode' => 'vs20starlightx',
                'GameName' => 'Starlight Princess 1000',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20starlightx.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20starlight',
                'GameName' => 'Starlight Princess',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20starlight.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

            [
                'GameCode' => 'vs20sugarrushx',
                'GameName' => 'Sugar Rush 1000',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20sugarrushx.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20gatotx',
                'GameName' => 'Gates of Gatot Kaca 1000',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20gatotx.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20pbonanza',
                'GameName' => 'Pyramid Bonanza',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20pbonanza.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

            [
                'GameCode' => 'vs20candybltz2',
                'GameName' => 'Candy Blitz Bombs',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20candybltz2.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

            [
                'GameCode' => 'vs20portals',
                'GameName' => 'Fire Portals',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20portals.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20ninjapower',
                'GameName' => 'Power of Ninja',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20ninjapower.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20bison',
                'GameName' => 'Release the Bison',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20bison.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vswayslions',
                'GameName' => '5 Lions Megaways',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vswayslions.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

            [
                'GameCode' => 'vswaysspltsym',
                'GameName' => 'Dwarf & Dragon',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vswaysspltsym.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20procount',
                'GameName' => 'Wisdom of Athena',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20procount.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20heartcleo',
                'GameName' => 'Heart of Cleopatra',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20heartcleo.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

            [
                'GameCode' => 'vswaysjapan',
                'GameName' => 'Starlight Princess Pachi',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vswaysjapan.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

            [
                'GameCode' => 'vs40stckwldlvl',
                'GameName' => 'Ripe Rewards',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs40stckwldlvl.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vswaysstampede',
                'GameName' => 'Fire Stampede',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vswaysstampede.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20doghouse2',
                'GameName' => 'The Dog House - Dog or Alive',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20doghouse2.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vs20sugrux',
                'GameName' => 'Sugar Rush Xmas',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vs20sugrux.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vswayspowzeus',
                'GameName' => 'Power of Merlin Megaways',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vswayspowzeus.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],
            [
                'GameCode' => 'vswayshammthor',
                'GameName' => 'Power of Thor Megaways',
                'GameType' => 1,
                'Category' => 'Games',
                'ImageUrl' => 'https://api-sg57.ppgames.net/game_pic/square/200/vswayshammthor.png',
                'ProviderGameType' => null,
                'ProviderCode' => null,
            ],

        ];

        foreach ($data as $game) {
            // Remove unwanted fields
            unset($game['Category']);
            unset($game['ProviderGameType']);
            unset($game['ProviderCode']);

            // Map to the database schema
            $gameData = [
                'code' => $game['GameCode'],
                'name' => $game['GameName'],
                'game_type_id' => $game['GameType'],
                'image_url' => $game['ImageUrl'],
                'product_id' => 1, // Assuming a static product_id for all entries
            ];

            // Insert into the GameList model
            HotGame::create($gameData);
        }
    }
}
