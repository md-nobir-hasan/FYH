<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurvivalSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $survival = [
            [
                'banner_title'=>'Are You Excited For Survival Guide?',
                'banner_des'=>'You will get survival guide for switzerland in here',
                'banner_img'=>'/images/Rectangle162.png',
            ],
        ];
        DB::table('survivals')->insert($survival);
    }
}
