<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $data = [
            [
                'title'=>'Living Standard',
                'first_para'=>"Welcome to the heart of Europe, where the awe-<br class='br'>inspiring Alps meet idyllic cities, and where life's <br class='br'> Quality is as breathtaking as the landscape.",
                'rest_para'=>'',
                'image'=>'images/sofa.png',
                'priority'=>1,
            ],
            [
                'title'=>'Geography',
                'first_para'=>"Centrally located amidst the iconic beauty<br class='br'>of Europe Switzerland stands as a testament to<br class='br'>nature's splendor and human innovation.",
                'rest_para'=>'',
                'image'=>'images/sofa.png',
                'priority'=>2,
            ],
            [
                'title'=>'Climate',
                'first_para'=>"Switzerland, famed for its Alpine splendor, is a<br class='br'>land where the wether paints a dynamic<br class='br'>backdrop to an already brathtaking canvas",
                'rest_para'=>'',
                'image'=>'images/sofa.png',
                'priority'=>3,
            ],
            [
                'title'=>'Ecology',
                'first_para'=>"In the heart of Europe lies Switzerland, a country<br class='br'>renowned not just for its picturesque landscapes<br class='br'> and high standard of living.",
                'rest_para'=>'',
                'image'=>'images/sofa.png',
                'priority'=>4,
            ],
            [
                'title'=>'Nature',
                'first_para'=>"Welcome to the natural grandeur of Wsitzerland, a<br class='br'>land where emerald valleys meet soaring peaks,<br class='br'>and tranquil lakes mirror the drama of the skies.",
                'rest_para'=>'',
                'image'=>'images/nature.png',
                'priority'=>5,
            ],
            [
                'title'=>'Safety',
                'first_para'=>"Experience the tranquiltity and security that is a<br class='br'>country globally recognized for its high safety<br class='br'>
                standsards and exceptional quality of life.",
                'rest_para'=>'',
                'image'=>'images/safety.png',
                'priority'=>6,
            ],
        ];
        DB::table('benefits')->insert($data);
    }
}
