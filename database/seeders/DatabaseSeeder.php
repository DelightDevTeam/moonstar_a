<?php

namespace Database\Seeders;

use App\Models\Admin\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            GameTypeTableSeeder::class,
            ProductTableSeeder::class,
            GameTypeProductTableSeeder::class,
            BannerSeeder::class,
            BannerTextSeeder::class,
            AsiaGamingTablesSeeder::class,
            CQ9GameListTableSeeder::class,
            CQ9FishingTablesSeeder::class,
            EvolutionGamingTableSeeder::class,
            PragmaticPlaySeeder::class,
            PGSoftGameListSeeder::class,
            JokerGameListSeeder::class,
            SexyGamingSeeder::class,
            RealTimeGamingSeeder::class,
            YggdrasilSeeder::class,
            JDBTablesSeeder::class,
            KAGamingTablesSeeder::class,
            SpadeGamingTablesSeeder::class,
            SpadeGamingFishingTablesSeeder::class,
            PlayStarTablesSeeder::class,
            PlayStarFishingTablesSeeder::class,
            HabaneroGamingTablesSeeder::class,
            MrSlottyTablesSeeder::class,
            TrueLabTablesSeeder::class,
            BGamingTablesSeeder::class,
            WazdanTablesSeeder::class,
            FaziTablesSeeder::class,
            NetGameTablesSeeder::class,
            RedRakeTablesSeeder::class,
            BoongoTablesSeeder::class,
            SkywindTablesSeeder::class,
            SkywindCasinoTablesSeeder::class,
            AdvantPlayTablesSeeder::class,
            GENESISTablesSeeder::class,
            SimplePlayTablesSeeder::class,
            JiliTablesSeeder::class,
            FuntaGamingTablesSeeder::class,
            FelixGamingTablesSeeder::class,
            SmartSoftTablesSeeder::class,
            ZeusPlayTablesSeeder::class,
            NetentTablesSeeder::class,
            RedTigerTablesSeeder::class,
            GamingWorldTablesSeeder::class,
            YesGetRichTablesSeeder::class,
            Live22SMTablesSeeder::class,
            NoLimitCitySeeder::class,
            BigTimeGamingSeeder::class,
            BannerAdsSeeder::class,
            PaymentTypeTableSeeder::class
        ]);

    }
}
