<?php

namespace Database\Seeders;

use App\Models\Admin\GameList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RedRakeTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(base_path('app/Console/Commands/data/RedRakeModify.json'));
        $data = json_decode($json);
        foreach ($data->ProviderGames as $obj) {
            GameList::create([
                'code' => $obj->GameCode,
                'name' => $obj->GameName,
                'game_type_id' => $obj->game_type_id,
                'product_id' => $obj->product_id,
                'image_url' => $obj->ImageUrl,
            ]);
        }
    }
}
