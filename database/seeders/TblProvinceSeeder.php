<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TblProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Random:*/

        // for($i = 0; $i<10; $i++) {
        //     DB::table('tbl_provinces')->insert([
        //         'province_code' => Str::random(4),
        //         'province_name' => Str::random(10),
        //     ]);
        // }

        /*Không Random:*/

        DB::table('tbl_provinces')->insert([
            'province_code' => 'HNI',
            'province_name' => 'Hà Nội',
        ]);
        DB::table('tbl_provinces')->insert([
            'province_code' => 'PTH',
            'province_name' => 'Phú Thọ',
        ]);
        DB::table('tbl_provinces')->insert([
            'province_code' => 'VPH',
            'province_name' => 'Vĩnh Phúc',
        ]);
    }
}
