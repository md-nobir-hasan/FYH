<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = [
            ['title'=>'Home','name' => 'Home','status' => 1],
            ['title'=>'User Management','name' => 'User Management','status' => 1],
                ['title'=>'Role','name' => 'Role','status' => 1],
                ['title'=>'User','name' => 'User','status' => 1],
                ['title'=>'Permission','name' => 'Permission','status' => 1],
            ['title'=>'Customer','name' => 'Customer','status' => 1],
            ['title'=>'Setup','name' => 'Setup','status' => 1],
                ['title'=>'Membership Type','name' => 'Client Type','status' => 1],
                ['title'=>'Membership','name' => 'Membership Type','status' => 1],
                ['title'=>'Benefit','name' => 'Benefit','status' => 1], //10
                ['title'=>'Link','name' => 'Link','status' => 1],
                ['title'=>'Currency','name' => 'Currency','status' => 1],
                ['title'=>'Payment Duration','name' => 'Payment Duration','status' => 1],
            ['title'=>'Menu','name' => 'Menu','status' => 1],
                ['title'=>'Main Menu','name' => 'Main Menu','status' => 1],
                ['title'=>'Sub-menu','name' => 'Sub-menu','status' => 1],
            ['title'=>'Setting','name' => 'setting','status' => 1],
                ['title'=>'Site Setting','name' => 'site setting','status' => 1],
                ['title'=>'Congrat','name' => 'Congrat','status' => 1],
                ['title'=>'Opportunity','name' => 'Opportunity','status' => 1],//20
                ['title'=>'Service','name' => 'Service','status' => 1],
                ['title'=>'Story','name' => 'Story','status' => 1],
                ['title'=>'About','name' => 'About','status' => 1],
                ['title'=>'MoveTo','name' => 'MoveTo','status' => 1],
                ['title'=>'Integration','name' => 'Integration','status' => 1],//25
                ['title'=>'Survival Guide','name' => 'Survival','status' => 1],
                ['title'=>'Video','name' => 'Video','status' => 1],
        ];

        DB::table('features')->insert($n);
    }
}
