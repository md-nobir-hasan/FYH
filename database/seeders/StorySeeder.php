<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1 Afghanistan
        //2 Albania
        //3 Algeria
        //4 American Samoa
        //5 Andorra
        //6 Angola
        //7 Anguilla
        //8 Antarctica
        //9 Argentina
        //10 Australia
        //11 Austria
        //12 Bahams
        //13 Bangladesh
        $data = [
            [
                'name' => "David Milan",
                'slug' => "",
                'title' => "From a Business Trip to a Lifelong Love: Embracing Switzerland's Charm and Building My Future.",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.
                    I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 1,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "images/stry1.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 2,
            ],
            [
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 2,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "images/stry2.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 2,
            ],
            [
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 3,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "images/stry3.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 2,
            ],
            [
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 4,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "images/stry4.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 2,
            ],
            [
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 5,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "images/stry5.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>8,
                'feature_img'=>'',
                'user_id' => 2,
            ],
            [
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 6,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "images/stry6.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>8,
                'feature_img'=>'',
                'user_id' => 2,
            ],
            [
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 7,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "images/stry7.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>10,
                'feature_img'=>'',
                'user_id' => 2,
            ],
            [
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>My Best Decision</span> <br>of Relocating",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 8,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "images/stry6.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 1,
                'views' =>0,
                'feature_img' => "images/fs-rect1.png",
                'user_id' => 2,
            ],
            [
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> <br>Happiness in Here",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning. I had a kind of morning routine, but it was not consistent. Before this program I was struggling to remember things, such as PIN numbers, important dates, things to do at home, things to buy at store and I was having a hard time to concentrate and follow through with my learning.",
                'priority' => 9,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "images/stry6.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 1,
                'views' =>0,
                'feature_img' => "images/fs-rect2.png",
                'user_id' => 2,
            ],
        ];
        DB::table('stories')->insert($data);
    }
}
