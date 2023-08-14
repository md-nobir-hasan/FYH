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
                ['name'=>'Annual'],
            ];
            DB::table('payment_durations')->insert($pay_duration);

        //client type seeder
            $ct = [
                ['name'=>'Monthly',
                'plan_id'=>'plan_NzMovXZ9gkaiG2',
                'interval_count'=>1,
                'price'=>7.9,
                'dis'=>0,
                'des'=>'You can pay monthly and cancel the subscription',
                'billing_period' => 'month',
                'currency' => 'CHF',
            ],

            ['name'=>'Annual',
            'plan_id'=>'plan_Nzm4CehIehiNIF',
            'interval_count'=>1,
            'price'=>58.8,
            'dis'=>36,
            'des'=>'You pay annually and save',
            'billing_period' => 'year',
            'currency' => 'CHF',
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

        //Country
            $countries = [
                ['country'=>'Afghanistan'],
                ['country'=>'Albania'],
                ['country'=>'Algeria'],
                ['country'=>'American Samoa'],
                ['country'=>'Andorra'],
                ['country'=>'Angola'],
                ['country'=>'Anguilla'],
                ['country'=>'Antarctica'],
                ['country'=>'Argentina'],
                ['country'=>'Australia'],
                ['country'=>'Austria'],
                ['country'=>'Bahams'],
                ['country'=>'Bangladesh'],
            ];
            DB::table('countries')->insert($countries);
    }
}
