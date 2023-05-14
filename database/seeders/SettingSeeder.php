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
            ['title'=>'FYH','logo'=>'/images/fyhlogo.png','email'=>'support@fyh.ch','phone'=>'1245458425','address'=>'Switzerland'],
        ];
        DB::table('settings')->insert($settings);
    }
}
