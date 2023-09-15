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
        //14 Germany
        //15 Russia
        //16 India
        $data = [
            [ //1
                'name' => "Elena Mazaeva",
                'slug' => "",
                'title' => "From a Business Trip to a Lifelong Love: Embracing Switzerland's Charm and Building My Future.",
                'description' => "My love for Switzerland was born back in 2013, when I visited this beautiful country for the first time. It was a business trip as part of my work at Novartis. I saw that Switzerland combines all the attributes of an ideal country: beautiful nature, a fair state structure, a high standard of living, a huge number of career prospects, a very good geographical location and much more. At that time, I also loved Dubai and spent almost all my vacations in this city. However, in 2021 I decided to spend my vacation in Switzerland and did not regret it. During my vacation, I met my husband (a resident of Switzerland) and a ...",
                'priority' => 1,
                'address' => "Moscow",
                'city' => "Moscow",
                'profession' => 'Marketing Manager',
                'image' => "image/stry01.png",
                'status' => 1,
                'country_id' => 15,
                'feature' => 1,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>20,
                'feature_img'=> 'image/fs-rect3.png',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //2
                'name' => "Maria Maksic",
                'slug' => "",
                'title' => "From Unexpected Love to a Life of Dreams: My Journey to Switzerland's Embrace.",
                'description' => "I initially never planned to move to Switzerland, and actually was in a process of moving to Australia. After getting an acceptance letter from one of the Australian universities, I went to a short trip to beautiful Switzerland and... met my future husband here. He proposed after 4 month of dating, and we got married shortly after. What a twist!
                                    I moved to Switzerland following my love, but got so much more: family, career, high quality of life, stability and security, beautiful nature, delicious cheese and chocolate and so much more!
                                    Any change is connected with a fear of unknown, but I really recommend you to dare and give it a try.
                                    Follow your heart and move to Switzerland, the heart of Europe!"
                                ,
                'priority' => 2,
                'address' => "Berlin",
                'city' => "Berlin",
                'profession' => 'Recruiter',
                'image' => "image/stry02.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 1,
                 'feature_title' => "UNEXPECTED LOVE",
                'feature_para' => "to A LIFE OF DREAMS",
                'views' =>0,
                'feature_img'=> 'image/fs-rect2.png',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //3
                'name' => "Xhevit Gurra",
                'slug' => "",
                'title' => "From Unexpected Love to a Life of Dreams: My Journey to Switzerland's Embrace.",
                'description' => "Once upon a time, I decided to leave Albania and move to Germany in search of better opportunities. I worked hard there for three years as a doctor, but I had to deal with a lot of bureaucracy and faced racism, which was tough to handle. <br class='str-br'><br class='str-br'>

                                    During my time in Germany, I had reached out to Thomas, who had promised to help me once I got my recognition to work as a doctor in Switzerland. Despite the challenges, I never gave up hope and continued working towards my dream.<br class='str-br'><br class='str-br'>

                                    Finally, after a lot of dedication and perseverance, I managed to get my recognition as a doctor in Switzerland. And just as Thomas had said, he extended his helping hand, and with his support, I started a new chapter in Switzerland.<br class='str-br'><br class='str-br'>

                                    It's been one year since I made that decision, and I can confidently say that I am happy with my choice. Switzerland has embraced me, and I feel appreciated for my skills and expertise.<br class='str-br'><br class='str-br'>

                                    Looking back on this incredible journey, I cherish the moments of struggle and the courage it took to overcome all the obstacles. Switzerland has become my home, and I'm grateful for the support and friendship of Thomas, who played a significant role in my success.<br class='str-br'><br class='str-br'>

                                    Now, I stand tall and proud, grateful for the opportunities that came my way. This is a story of determination, friendship, and finding fulfillment in following my heart despite the challenges I faced. And here I am, living happily ever after in Switzerland<br class='str-br'><br class='str-br'>
                                    ",
                'priority' => 3,
                'address' => "Berlin",
                'city' => "Berlin",
                'profession' => 'Resident Psychiatry',
                'image' => "image/stry-gurra.png",
                'status' => 1,
                'country_id' => 2,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>19,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //4
                'name' => "Axel Meyer",
                'slug' => "",
                'title' => 'From Financial Freedom to Fulfillment: My Remarkable Swiss Journey With Thomas',
                'description' => "Yes, Switzerland is expensive, at least when you look at it from abroad, but I used to have so much month left at the end of the money and today I still have enough money in the account at the end of the cost. I experience the quality of life and medical care here as a clear quantum leap for the better than before.<br class='str-br single'>
                                In the meantime, I have changed jobs, although Thomas already had an eye on whether we would fit together when choosing the first one. That was what it seemed like at first, but then I realized that I needed something else to be happy at work.<br class='str-br single'>
                                Yes, I could have taken care of it myself, but I handed the task of looking for a job over to Thomas again, because he can use his contacts to better assess where I fit in under the changed requirements.<br class='str-br single'>
                                Here, too, I had 3 suggestions within a week from which one crystallized and what can I say, that fits like a glove, laugh. The nice thing is that I wouldn't even have had to move if I hadn't wanted to. Same region, great tasks and yes, although it wasn't my goal, an even better salary.<br class='str-br single'>
                                Oh well, Thomas and I became friends over time, because Thomas just takes care of things, keeps in touch and asks how things are going. In an honest exchange with each other and keeping in touch, it has shown that we tick pretty much the same way.<br class='str-br single'>
                                So I can only advise anyone who is interested or who is just thinking about coming to Switzerland to contact a reputable recruiter if possible. Based on my experiences with the first company that seemed competent at first glance, I naturally recommend Thomas.<br class='str-br single'>
                            ",
                'priority' => 4,
                'address' => "Berlin",
                'city' => "Berlin",
                'profession' => 'Healthcare Professional',
                'image' => "image/stry-meyer.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 1,
                'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "TO FULFILLMENT",
                'views' =>0,
                'feature_img'=> 'image/fs-rect1.png',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //5
                'name' => "Heena Verma",
                'slug' => "",
                'title' => 'Switzerland - We call it Heaven',
                'description' => "Being of Indian origin, we lived in the US for almost 7 years, and our daughter was born there as well.<br class='str-br single'/>
                                We enjoyed NY fast-paced life and had a plan of settling there itself.<br class='str-br br2'><br class='str-br br2' />

                                One day, an opportunity knocked our door to travel and work in Switzerland through my husband’s employer. We were unsure. Moving countries with a 2.5 year old daughter, leaving our jobs, her day care, home were not easy. It was a huge change. <br class='str-br br2' /> <br class='str-br br2' />

                                The only thing I knew about Switzerland was from Bollywood movies that it’s serene and heaven on earth.<br class='str-br br2' /><br class='str-br br2' />

                                We decided to take this chance. Initially, the plan was short-term, but now it’s already been 6 years, and we visualise this as our home.<br class='str-br br2' /><br class='str-br br2' />

                                This is a country where safety is the key, and quality of life is everything. I call it 3S- Slow pace, safe and serene.
                                ",
                'priority' => 5,
                'address' => "Berlin",
                'city' => "Berlin",
                'profession' => 'Recruitment Business Partner',
                'image' => "image/stry-verma.png",
                'status' => 1,
                'country_id' => 16,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>18,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
             [//6
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

                                    I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 6,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry03.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "",
                'feature_para' => "",
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],

            [ //7
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 7,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry04.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
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
                'image' => "image/stry05.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [ //9
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 9,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry06.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],

            [//10
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 10,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry07.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//11
                'name' => "David Milan",
                'slug' => "",
                'title' => "I have learnt so much, my memory got better, my morning routine got more structure",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.

I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.",
                'priority' => 11,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'English Teacher',
                'image' => "image/stry08.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img'=>'',
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],

            [//12
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>My Best Decision</span> of Relocating",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.</br></br> <span class='fs-1'>
                                I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.</span>",
                'priority' => 12,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/stry07.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'feature_img' => "",
                'views' =>0,
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//13
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey. </br></br> <span class='fs-1'>
                                I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths.</span>",
                'priority' => 13,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/stry07.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 0,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img' => "",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//14
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "FYH is a fantastic platform for sharing relocating stories. It's a welcoming community where I felt understood and supported. I'm grateful for the opportunity to connect with others who have had similar experiences. Highly recommended!",
                'priority' => 14,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/emma.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 2,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img' => "image/fs-rect2.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//15
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "Five stars for FYH! My experience with the service has been outstanding. Their services were exceptional, and their team went above and beyond to meet my needs. I highly recommend them for their efforts  and efficiency.",
                'priority' =>15,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/angelia.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 2,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img' => "image/fs-rect2.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
            [//16
                'name' => "Thomas T.",
                'slug' => "",
                'title' => "<span>Master Of</span> Happiness in Here",
                'description' => "Exceptional services that go above and beyond expectations. Top-notch services that are second to none! Highly recommended for their professionalism and outstanding results. I like FYH Very much.",
                'priority' => 16,
                'address' => "Berlin,Germany",
                'city' => "Berlin",
                'profession' => 'Marketing Manager',
                'image' => "image/ellipse.png",
                'status' => 1,
                'country_id' => 14,
                'feature' => 2,
                 'feature_title' => "FINANCIAL FREEDOM",
                'feature_para' => "to Fulfillment",
                'views' =>0,
                'feature_img' => "image/fs-rect2.png",
                'user_id' => 1,
                'created_at'=> Carbon::now(),
            ],
        ];
        DB::table('stories')->insert($data);
    }
}
