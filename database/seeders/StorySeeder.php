<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            [ //1
                'name' => "Elena Mazaeva",
                'slug' => "",
                'title' => "From a Business Trip to a Lifelong Love: Embracing Switzerland's Charm and Building My Future.",
                'description' => "My love for Switzerland was born back in 2013, when I visited this beautiful country for the first time. It was a business trip as part of my work at Novartis. I saw that Switzerland combines all the attributes of an ideal country: beautiful nature, a fair state structure, a high standard of living, a huge number of career prospects, a very good geographical location and much more. At that time, I also loved Dubai and spent almost all my vacations in this city. However, in 2021 I decided to spend my vacation in Switzerland and did not regret it. During my vacation, I met my husband (a resident of Switzerland) and a ...",
                'priority' => 1,
                'address' => "Russia",
                'city' => "Russia",
                'profession' => 'Marketing Manager',
                'image' => "image/stry01.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //2
                'name' => "Maria Maksic",
                'slug' => "",
                'title' => "From Unexpected Love to a Life of Dreams: My Journey to Switzerland's Embrace.",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.
                I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 2,
                'address' => "Russia",
                'city' => "Russia",
                'profession' => 'Recruiter',
                'image' => "image/stry02.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
             [//3
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 3,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry03.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>8,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],

            [ //4
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 4,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry04.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//5
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 5,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry05.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //6
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 6,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry06.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],

            [//7
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 7,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry07.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>8,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//8
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 8,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry08.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>10,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //9
                'name' => "Maria Maksic",
                'slug' => "",
                'title' => "From Unexpected Love to a Life of Dreams: My Journey to Switzerland's Embrace.",
                'description' => "I initially never planned to move to Switzerland, and actually was in a process of moving to Australia. After getting an acceptance letter from one of the Australian universities, I went to a short trip to beautiful Switzerland and... met my future husband here. He proposed after 4 month of dating, and we got married shortly after. What a twist!
                I moved to Switzerland following my love, but got so much more: family, career, high quality of life, stability and security, beautiful nature, delicious cheese and chocolate and so much more!
                Any change is connected with a fear of ... ",
                'priority' => 9,
                'address' => "Russia",
                'city' => "Russia",
                'profession' => 'Recruiter',
                'image' => "image/stry02.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 0,
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//10
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>My Best Decision</span> of Relocating",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.</br></br> <span class='fs-1'>
                                I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.</span>",
                'priority' => 10,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/stry07.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 1,
                'views' =>0,
                'feature_img' => "image/fs-rect1.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//11
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey. </br></br> <span class='fs-1'>
                                I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.</span>",
                'priority' => 11,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/stry07.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 1,
                'views' =>0,
                'feature_img' => "image/fs-rect2.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//12
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "FYH is a fantastic platform for sharing relocating stories. It's a welcoming community where I felt understood and supported. I'm grateful for the opportunity to connect with others who have had similar experiences. Highly recommended!",
                'priority' => 12,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/emma.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 2,
                'views' =>0,
                'feature_img' => "image/fs-rect2.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//13
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "Five stars for FYH! My experience with the service has been outstanding. Their services were exceptional, and their team went above and beyond to meet my needs. I highly recommend them for their efforts  and efficiency.",
                'priority' =>13,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/angelia.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 2,
                'views' =>0,
                'feature_img' => "image/fs-rect2.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//14
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "Exceptional services that go above and beyond expectations. Top-notch services that are second to none! Highly recommended for their professionalism and outstanding results. I like FYH Very much.",
                'priority' => 14,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/ellipse.png",
                'status' => 1,
                'country_id' => 1,
                'feature' => 2,
                'views' =>0,
                'feature_img' => "image/fs-rect2.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
        ];
        DB::table('stories')->insert($data);
    }
}
