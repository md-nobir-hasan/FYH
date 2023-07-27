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
                'description'=>"Welcome to the heart of Europe, where the awe-<br class='br'>inspiring Alps meet idyllic cities, and where life's <br class='br'> Quality is as breathtaking as the landscape.",
                'image'=>'images/sofa.png',
                'priority'=>1,
            ],
            [
                'title'=>'Geography',
                'description'=>"Centrally located amidst the iconic beauty<br class='br'>of Europe Switzerland stands as a testament to<br class='br'>nature's splendor and human innovation.",
                'image'=>'images/sofa.png',
                'priority'=>2,
            ],
            [
                'title'=>'Climate',
                'description'=>"Switzerland, famed for its Alpine splendor, is a<br class='br'>land where the wether paints a dynamic<br class='br'>backdrop to an already brathtaking canvas",
                'image'=>'images/sofa.png',
                'priority'=>3,
            ],
            [
                'title'=>'Ecology',
                'description'=>"In the heart of Europe lies Switzerland, a country<br class='br'>renowned not just for its picturesque landscapes<br class='br'> and high standard of living.",
                'image'=>'images/sofa.png',
                'priority'=>4,
            ],
            [
                'title'=>'Nature',
                'description'=>"Welcome to the natural grandeur of Wsitzerland, a<br class='br'>land where emerald valleys meet soaring peaks,<br class='br'>and tranquil lakes mirror the drama of the skies.",
                'image'=>'images/nature.png',
                'priority'=>5,
            ],
            [
                'title'=>'Safety',
                'description'=>"Experience the tranquiltity and security that is a<br class='br'>country globally recognized for its high safety<br class='br'>
                standsards and exceptional quality of life.",
                'image'=>'images/safety.png',
                'priority'=>6,
            ],
        ];
        DB::table('benefits')->insert($data);
    }
}
