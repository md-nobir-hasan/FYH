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
                'description'=>"Begin by choosing your desired<br class='br'>package from our carefully curated<br class='br'>options, tailored to suit your specific<br class='br'>needs and preferences.",
                'priority'=>1
            ],
            [
                'title'=>'Fill the Form',
                'image'=>'images/ser2.png',
                'description'=>"Complete a simple and user-friendly<br class='br'>form, providing us with essential<br class='br'>details to ensure a seamless and<br class='br'>personalized service for you",
                'priority'=>2
            ],
            [
                'title'=>'Make payment',
                'image'=>'images/ser7.png',
                'description'=>"Securely make payment through our<br class='br'>reliable and convenient payment<br class='br'> gateway, assuring a hassle-free<br class='br'>transaction process.",
                'priority'=>3
            ],
            [
                'title'=>'Enjoy',
                'image'=>'images/ser4.png',
                'description'=>"Sit back and enjoy our exceptional<br class='br'>service,knowing you've taken the steps to emark on a rewarding<br class='br'>journey with us.",
                'priority'=>4
            ],

        ];
        DB::table('services')->insert($data);
    }
}
