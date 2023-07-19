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
            ['banner_title'=>'Are You Exicted for Survival Guide?','banner_des'=>'','banner_img'=>''],
        ];
        DB::table('survivals')->insert($survival);
    }
}
