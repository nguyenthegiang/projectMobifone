<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Port1090NewsSeederAndMore extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* --------Port1090News-------- */
        for ($i = 0; $i < 100; $i++) {
            DB::table('port1090_news')->insert([
                'title' => Str::random(10),
                'shortContent' => Str::random(30),
                'content' => Str::random(500),
                'image' => 'noimage.png',
            ]);
        }

        /* --------documentary-------- */
        for ($i = 0; $i < 100; $i++) {
            DB::table('documentaries')->insert([
                'code' => Str::random(10),
                'title' => Str::random(30),
                'applyTime' => date("Y-m-d H:i:s"),
                'content' => Str::random(500),
                'region' => Str::random(10),
                'port1090_news_id' => rand(1, 99),
                'fileLink' => 'NOFILE.pdf',
            ]);
        }
    }
}
