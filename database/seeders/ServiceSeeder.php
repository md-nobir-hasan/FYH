<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title'=>'Select Package',
                'image'=>'images/ser5.png',
                'description'=>"Begin by choosing your desired<br class='br'>",
                'priority'=>1
            ],

        ];
        DB::table('services')->insert($data);
    }
}
