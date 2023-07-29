<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Currency
            $curren = [
                ['name'=>'chf','rate'=>1],
                ['name'=>'usd','rate'=>0.89],
            ];
            DB::table('currencies')->insert($curren);

        //Payment Duration
            $pay_duration = [
                ['name'=>'Monthly'],
                ['name'=>'Yearly'],
            ];
            DB::table('payment_durations')->insert($pay_duration);

        //client type seeder
            $ct = [
                ['name'=>'Basic','plan_id'=>'plan_NzMovXZ9gkaiG2','interval_count'=>4,'price'=>300,
                'des'=>' <p class="w-[236px] ml-[30px]">It’s the starter package for new comer. You can pay monthly and
                        cancel anytime...</p>
                        <p class="w-[400px] border-t-2 border-black mx-[30px] my-2"></p>
                        <div class="text-[14px] ml-[40px]">
                            <p class="mb-[6px]">
                                <i class="fa-solid fa-check"></i> Access to A limited selection of Services
                            </p>
                            <p class="mb-[6px]">
                                <i class="fa-solid fa-check"></i> Access to A limited selection of Services
                            </p>
                            <p class="mb-[6px]">
                                <i class="fa-solid fa-check"></i> Access to Community Discussion Forum
                            </p>
                            <p class="mb-[6px]">
                                <i class="fa-solid fa-check"></i> Customer Support via Email
                            </p>
                        </div>',
                        'billing_period' => 'month',
                        'currency' => 'chf',
            ],

            ['name'=>'Pro','plan_id'=>'plan_Nzm4CehIehiNIF','interval_count'=>1,'price'=>1000,
            'des'=>' <p class="w-[236px] ml-[30px]">It’s the starter package for new comer. You can pay monthly and
                    cancel anytime...</p>
                    <p class="w-[400px] border-t-2 border-black mx-[30px] my-2"></p>
                    <div class="text-[14px] ml-[40px]">
                        <p class="mb-[6px]">
                            <i class="fa-solid fa-check"></i> Access to A limited selection of Services
                        </p>
                        <p class="mb-[6px]">
                            <i class="fa-solid fa-check"></i> Access to A limited selection of Services
                        </p>
                        <p class="mb-[6px]">
                            <i class="fa-solid fa-check"></i> Access to Community Discussion Forum
                        </p>
                        <p class="mb-[6px]">
                            <i class="fa-solid fa-check"></i> Customer Support via Email
                        </p>
                    </div>',
                    'billing_period' => 'year',
                    'currency' => 'chf',
        ],

            ];
            DB::table('client_types')->insert($ct);

        // //membership type seeder
        //     $mt = [
        //         ['name'=>'month','price'=>250,'mt_code'=>'m'],
        //         ['name'=>'year','price'=>2000,'mt_code'=>'y'],
        //     ];
        //     DB::table('membership_types')->insert($mt);

        //Link
            $links = [
                ['name'=>'Home','url'=>'/'],
                ['name'=>'User Home','url'=>'/home'],
                ['name'=>'Membership','url'=>'/membership'],
                ['name'=>'Community','url'=>'/community'],
                ['name'=>'Benefits','url'=>'/benefits'],//5
                // ['name'=>'Guide','url'=>'/members'],
                ['name'=>'About','url'=>'/about'],
                ['name'=>'Share Story','url'=>'/share-story'],//7
                ['name'=>'Survival Guide','url'=>'/guide/survival-guide'],
                ['name'=>'Move To Switzerland','url'=>'/guide/moving-to-switzerland'],
                ['name'=>'Intregation In Switzerland','url'=>'/guide/integration-in-switzerland'],
            ];
            DB::table('links')->insert($links);

        //Videos
            $videos = [
                ['for'=>'survival','embed_code'=>'https://www.youtube.com/embed/tgbNymZ7vqY','title'=>'Survival Guide Video','des'=>'GUIDENCE FROM THOMAS TSANGARAS','additional_des'=>'','default'=>1],
                ['for'=>'survival','embed_code'=>'https://www.youtube.com/embed/tgbNymZ7vqY','title'=>'GUIDENCE FROM THOMAS TSANGARAS','des'=>'Here goes a short description about this video.','additional_des'=>'','default'=>null],
                ['for'=>'survival','embed_code'=>'https://www.youtube.com/embed/tgbNymZ7vqY','title'=>'GUIDENCE FROM THOMAS TSANGARAS','des'=>'Here goes a short description about this video.','additional_des'=>'','default'=>null],
                ['for'=>'survival','embed_code'=>'https://www.youtube.com/embed/tgbNymZ7vqY','title'=>'GUIDENCE FROM THOMAS TSANGARAS','des'=>'Here goes a short description about this video.','additional_des'=>'','default'=>null],
                [
                    'for'=>'about',
                    'embed_code'=>'https://www.youtube.com/embed/tgbNymZ7vqY',
                    'title'=>'- Thomas Tsangaras, Founder of FYH',
                    'des'=>"“We’re constantly exploring, inventing, and optimizing personal transformation to ultimately unite our species, save our planet, and usher in a new golden age for humanity.”",
                    'additional_des'=>'',
                    'default'=>1
                ],
            ];
            DB::table('videos')->insert($videos);
    }
}
