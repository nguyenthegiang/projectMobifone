<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TblUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Make a random date for DOB & Work_Start
        $int= rand(1262055681,1262055681);          //Tìm cách sửa cái này để nó random ra ngày thực sự
        $string = date("Y-m-d H:i:s",$int);

        /*Random:*/        

        // //Nhân viên loại 1: Giao dịch viên
        // for($i = 0; $i<10; $i++) {
        //     DB::table('tbl_users')->insert([
        //         'name' => Str::random(10),
        //         'district_id' => rand(1, 10),
        //         'type' => 'Giao dịch viên',
        //         'user_mbf' => Str::random(10),
        //         'password' => Hash::make('password'),
        //         'emp_code' => Str::random(10),
        //         'ez' => rand(900000000, 999999999),
        //         'phone' => rand(900000000, 999999999),
        //         'email' => Str::random(10).'@gmail.com',
        //         'ward' => Str::random(10),
        //         'DOB' => $string,
        //         'Work_Start' => $string,
        //     ]);
        // }

        // //Nhân viên loại 1: Nhân viên bán hàng
        // for($i = 0; $i<10; $i++) {
        //     DB::table('tbl_users')->insert([
        //         'name' => Str::random(10),
        //         'district_id' => rand(1, 10),
        //         'type' => 'Nhân viên bán hàng',
        //         'user_mbf' => Str::random(10),
        //         'password' => Hash::make('password'),
        //         'emp_code' => Str::random(10),
        //         'ez' => rand(900000000, 999999999),
        //         'phone' => rand(900000000, 999999999),
        //         'email' => Str::random(10).'@gmail.com',
        //         'ward' => Str::random(10),
        //         'DOB' => $string,
        //         'Work_Start' => $string,
        //     ]);
        // }

        /*Không Random:*/
        //Với mỗi District (có 8 District) thì tạo ra 1 NVBH và 1 GDV
        for($i = 1; $i <= 8; $i++) {
            DB::table('tbl_users')->insert([
                'name' => Str::random(10),
                'district_id' => $i,                //xác định rõ district
                'type' => 'Nhân viên bán hàng',
                'user_mbf' => Str::random(10),
                'password' => Hash::make('password'),
                'emp_code' => Str::random(10),
                'ez' => rand(900000000, 999999999),
                'phone' => rand(900000000, 999999999),
                'email' => Str::random(10).'@gmail.com',
                'ward' => Str::random(10),
                'DOB' => $string,
                'Work_Start' => $string,
            ]);
            DB::table('tbl_users')->insert([
                'name' => Str::random(10),
                'district_id' => $i,            //xác định rõ district
                'type' => 'Giao dịch viên', 
                'user_mbf' => Str::random(10),
                'password' => Hash::make('password'),
                'emp_code' => Str::random(10),
                'ez' => rand(900000000, 999999999),
                'phone' => rand(900000000, 999999999),
                'email' => Str::random(10).'@gmail.com',
                'ward' => Str::random(10),
                'DOB' => $string,
                'Work_Start' => $string,
            ]);
        }

    }
}
