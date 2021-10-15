<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TblDistrictSeeder extends Seeder
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
        //     DB::table('tbl_districts')->insert([
        //         'district_code' => Str::random(4),
        //         'district_name' => Str::random(10),
        //         'province_id' => rand(1, 10),
        //     ]);
        // }

        /*Không Random:*/

        DB::table('tbl_districts')->insert([
            'district_code' => 'LBN',
            'district_name' => 'Long Biên',
            'province_id' => 1,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'CGI',
            'district_name' => 'Cầu Giấy',
            'province_id' => 1,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'HKM',
            'district_name' => 'Hoàn Kiếm',
            'province_id' => 1,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'AM',
            'district_name' => 'Nhân viên AM',
            'province_id' => 1,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'VTR',
            'district_name' => 'Việt Trì',
            'province_id' => 2,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'CKH',
            'district_name' => 'Cẩm Khê',
            'province_id' => 2,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'LTH',
            'district_name' => 'Lâm Thao',
            'province_id' => 2,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'DHG',
            'district_name' => 'Đoan Hùng',
            'province_id' => 2,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'AM',
            'district_name' => 'Nhân viên AM',
            'province_id' => 2,
        ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'LTH',
            'district_name' => 'Lập Thạch',
            'province_id' => 3,
        ]);
        // DB::table('tbl_districts')->insert([
        //     'district_code' => 'VTG',
        //     'district_name' => 'Vĩnh Tường',
        //     'province_id' => 3,
        // ]);
        // DB::table('tbl_districts')->insert([
        //     'district_code' => 'TDO',
        //     'district_name' => 'Tam Đảo',
        //     'province_id' => 3,
        // ]);
        DB::table('tbl_districts')->insert([
            'district_code' => 'AM',
            'district_name' => 'Nhân viên AM',
            'province_id' => 3,
        ]);
    }
}
