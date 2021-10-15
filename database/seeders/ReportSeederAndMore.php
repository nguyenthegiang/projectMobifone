<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReportSeederAndMore extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*-----------------------------------------*/
        /*--------------- TblReason ---------------*/
        DB::table('tbl_reasons')->insert([
            'reason_name' => 'Bán hàng',
        ]);
        DB::table('tbl_reasons')->insert([
            'reason_name' => 'Lý do khác',
        ]);
        DB::table('tbl_reasons')->insert([
            'reason_name' => 'Lý do khác nữa',
        ]);


        /*-----------------------------------------*/
        /*--------------- TblReportType ---------------*/
        DB::table('tbl_report_types')->insert([
            'reportType_name' => 'Chi tiết',
        ]);
        DB::table('tbl_report_types')->insert([
            'reportType_name' => 'Không chi tiết',
        ]);
        DB::table('tbl_report_types')->insert([
            'reportType_name' => 'Chi tiết bình thường',
        ]);


        /*-----------------------------------------*/
        /*--------------- TblRevenueType ---------------*/
        DB::table('tbl_revenue_types')->insert([
            'revenueType_name' => 'Doanh thu chưa chiết khấu',
        ]);
        DB::table('tbl_revenue_types')->insert([
            'revenueType_name' => 'Doanh thu đã chiết khấu',
        ]);
        DB::table('tbl_revenue_types')->insert([
            'revenueType_name' => 'Doanh thu không chiết khấu',
        ]);
        DB::table('tbl_revenue_types')->insert([
            'revenueType_name' => 'Doanh thu chưa biết chiết khấu chưa',
        ]);


        /*-----------------------------------------*/
        /*--------------- TblStore ---------------*/
        DB::table('tbl_stores')->insert([
            'store_name' => 'Công ty Dịch vụ MobiFone Khu vực 4',
        ]);
        DB::table('tbl_stores')->insert([
            'store_name' => 'Công ty Dịch vụ MobiFone Khu vực 5',
        ]);
        DB::table('tbl_stores')->insert([
            'store_name' => 'Công ty Dịch vụ MobiFone Khu vực 6',
        ]);
        DB::table('tbl_stores')->insert([
            'store_name' => 'Công ty Dịch vụ MobiFone Khu vực 7',
        ]);
        DB::table('tbl_stores')->insert([
            'store_name' => 'Công ty Dịch vụ MobiFone Khu vực 8',
        ]);


        /*-----------------------------------------*/
        /*--------------- TblReport ---------------*/
        DB::table('tbl_reports')->insert([
            'dealerCode' => '1BDI00003',
            'dealerName' => 'Cửa hàng GD Huyện Điện Biên-TT1',
            'mobiez' => 765000,
            'airtime' => 0,
            'cardCode' => 0,
            'card10' => 0,
            'card20' => 5338,
            'card30' => 0,
            'card50' => 2356,
            'card100' => 279,
            'card200' => 2,
            'card300' => 0,
            'card500' => 1,
            'province_id' => 1,
            'store_id' => 1,
            'reason_id' => 1,
            'revenueType_id' => 1,
            'reportType_id' => 1,
            'evaluation' => 'Rất hay và bổ ích',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tbl_reports')->insert([
            'dealerCode' => '1BDI000019',
            'dealerName' => 'Cửa hàng GD Huyện Điện Biên',
            'mobiez' => 100000,
            'airtime' => 0,
            'cardCode' => 0,
            'card10' => 0,
            'card20' => 12345,
            'card30' => 0,
            'card50' => 456,
            'card100' => 11,
            'card200' => 6,
            'card300' => 0,
            'card500' => 2,
            'province_id' => 1,
            'store_id' => 1,
            'reason_id' => 1,
            'revenueType_id' => 1,
            'reportType_id' => 1,
            'evaluation' => 'Rất hay và bổ ích',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tbl_reports')->insert([
            'dealerCode' => '1BDI00020',
            'dealerName' => 'Cửa hàng GD Huyện Mường Lay',
            'mobiez' => 800000,
            'airtime' => 0,
            'cardCode' => 0,
            'card10' => 0,
            'card20' => 1237,
            'card30' => 0,
            'card50' => 7533,
            'card100' => 12,
            'card200' => 2,
            'card300' => 6,
            'card500' => 8,
            'province_id' => 1,
            'store_id' => 1,
            'reason_id' => 1,
            'revenueType_id' => 1,
            'reportType_id' => 1,
            'evaluation' => 'Rất hay và bổ ích',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tbl_reports')->insert([
            'dealerCode' => '1BDI00213',
            'dealerName' => 'Cửa hàng GD Huyện Tuần Giáo',
            'mobiez' => 0,
            'airtime' => 0,
            'cardCode' => 0,
            'card10' => 160,
            'card20' => 0,
            'card30' => 0,
            'card50' => 9,
            'card100' => 11,
            'card200' => 88,
            'card300' => 0,
            'card500' => 0,
            'province_id' => 1,
            'store_id' => 1,
            'reason_id' => 1,
            'revenueType_id' => 1,
            'reportType_id' => 1,
            'evaluation' => 'Rất hay và bổ ích',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tbl_reports')->insert([
            'dealerCode' => '1BDI00003',
            'dealerName' => 'Cửa hàng GD TP Điện Biên',
            'mobiez' => 0,
            'airtime' => 0,
            'cardCode' => 0,
            'card10' => 0,
            'card20' => 89,
            'card30' => 0,
            'card50' => 12,
            'card100' => 33,
            'card200' => 2,
            'card300' => 0,
            'card500' => 1,
            'province_id' => 1,
            'store_id' => 1,
            'reason_id' => 1,
            'revenueType_id' => 1,
            'reportType_id' => 1,
            'evaluation' => 'Rất hay và bổ ích',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        //Random
        for ($i = 0; $i < 5000; $i++) {
            DB::table('tbl_reports')->insert([
                'dealerCode' => Str::random(10),
                'dealerName' => Str::random(30),
                'mobiez' => rand(100000, 900000),
                'airtime' => 0,
                'cardCode' => 0,
                'card10' => rand(1, 9000),
                'card20' => rand(1, 9000),
                'card30' => rand(1, 9000),
                'card50' => rand(1, 9000),
                'card100' => rand(1, 9000),
                'card200' => rand(1, 9000),
                'card300' => rand(1, 9000),
                'card500' => rand(1, 9000),
                'province_id' => rand(1, 3),
                'store_id' => rand(1, 5),
                'reason_id' => rand(1, 3),
                'revenueType_id' => rand(1, 4),
                'reportType_id' => rand(1, 3),
                'evaluation' => Str::random(20),
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
