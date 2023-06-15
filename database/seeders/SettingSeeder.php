<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['title'=>'FYH','logo'=>'/images/fyhlogo.png','email'=>'support@fyh.ch','phone'=>'1245458425','address'=>'FYH.com 8890 RoadHill St., Suite 100 Zurich, Switzerland-8000'],
        ];
        DB::table('settings')->insert($settings);
    }
}
