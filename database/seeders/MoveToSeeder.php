<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoveToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
           [
            'title' => "",
            'slug' => "",
            'first_para' =>"",
            'rest_para' => "",
            'image' => "",
            'priority' => 1,
            'status' => 1
           ],
           [
            'title' => "",
            'slug' => "",
            'first_para' =>"",
            'rest_para' => "",
            'image' => "",
            'priority' => 1,
            'status' => 1
           ],
        ];

        DB::table('move_tos')->insert($data);
    }
}
