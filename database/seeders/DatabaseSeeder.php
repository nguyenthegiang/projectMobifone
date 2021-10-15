<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            TblProvinceSeeder::class,
            TblDistrictSeeder::class,
            TblUserSeeder::class,
            ReportSeederAndMore::class,
            Port1090NewsSeederAndMore::class,
        ]);
    }
}
