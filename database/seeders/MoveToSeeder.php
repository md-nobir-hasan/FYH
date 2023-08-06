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
            'title' => "Reasons For Moving",
            'slug' => "",
            'first_para' =>"Welcome to the heart of Europe, where the awe- <br  class='mt-br mt-br11'>
                    inspiring Alps meet idyllic cities, and where life's <br  class='mt-br mt-br12'>
                    quality is as breathtaking as the landscape.",
            'rest_para' => "",
            'image' => "image/mt1.png",
            'priority' => 1,
            'status' => 1
           ],
           [
            'title' => "Visas And Permits",
            'slug' => "",
            'first_para' =>"Welcome to the heart of Europe, where the awe- <br  class='mt-br mt-br21'>
                    inspiring Alps meet idyllic cities, and where life's <br  class='mt-br  mt-br22'>
                    quality is as breathtaking as the landscape.",
            'rest_para' => "",
            'image' => "image/mt2.png",
            'priority' => 2,
            'status' => 1
           ],
           [
            'title' => "Find A Job",
            'slug' => "",
            'first_para' =>"Welcome to the heart of Europe, where the awe- <br  class='mt-br  mt-br31'>
                    inspiring Alps meet idyllic cities, and where life's <br  class='mt-br  mt-br32'>
                    quality is as breathtaking as the landscape.",
            'rest_para' => "",
            'image' => "image/mt3.png",
            'priority' => 3,
            'status' => 1
           ],
           [
            'title' => "Areas To Live",
            'slug' => "",
            'first_para' =>"Welcome to the heart of Europe, where the awe- <br  class='mt-br  mt-br41'>
                    inspiring Alps meet idyllic cities, and where life's <br  class='mt-br  mt-br42'>
                    quality is as breathtaking as the landscape.",
            'rest_para' => "",
            'image' => "image/mt4.png",
            'priority' => 4,
            'status' => 1
           ],
           [
            'title' => "Languages",
            'slug' => "",
            'first_para' =>"Welcome to the heart of Europe, where the awe- <br  class='mt-br  mt-br51'>
                    inspiring Alps meet idyllic cities, and where life's <br  class='mt-br  mt-br52'>
                    quality is as breathtaking as the landscape.",
            'rest_para' => "",
            'image' => "image/mt5.png",
            'priority' => 5,
            'status' => 1
           ],
           [
            'title' => "Find A Flat",
            'slug' => "",
            'first_para' =>"Welcome to the heart of Europe, where the awe- <br  class='mt-br  mt-br61'>
                    inspiring Alps meet idyllic cities, and where life's <br  class='mt-br  mt-br62'>
                    quality is as breathtaking as the landscape.",
            'rest_para' => "",
            'image' => "image/mt6.png",
            'priority' => 6,
            'status' => 1
           ],
        ];

        DB::table('move_tos')->insert($data);
    }
}
