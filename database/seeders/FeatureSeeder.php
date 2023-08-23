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
            ['title'=>'Dashboard','name' => 'dashboard','route_name'=>'dashboard','feature_id'=>null,'status' => 1],//1
            ['title'=>'Setup','name' => 'setup','route_name'=>'setup','feature_id'=>null,'status' => 1],//2
                ['title'=>'Membership Type','name' => 'membership_type','route_name'=> 'admin.setup.client-type.index','feature_id'=>2,'status' => 1],
                // ['title'=>'Membership','name' => 'Membership Type','route_name'=>'dashboard','feature_id'=>2,'status' => 1],
                ['title'=>'Link','name' => 'Link','route_name'=> 'admin.setup.link.index','feature_id'=>2,'status' => 1],
                ['title' => 'Video', 'name' => 'Video', 'route_name' => 'admin.setup.video.index', 'feature_id' => 2, 'status' => 1],
                // ['title'=>'Currency','name' => 'Currency','route_name'=>'dashboard','feature_id'=>2,'status' => 1],
                ['title'=>'Payment Duration','name' => 'payment_duration','route_name'=> 'admin.setup.payment_duration.index','feature_id'=>2,'status' => 1],
                ['title'=>'Country','name' => 'country','route_name'=> 'admin.setup.country.index','feature_id'=>2,'status' => 1],

            ['title' => 'User Management', 'name' => 'User Management', 'route_name' => 'admin/user', 'feature_id' => null, 'status' => 1],//8
                ['title' => 'Role', 'name' => 'Role', 'route_name' => 'admin.user.role.index', 'feature_id' => 8, 'status' => 1],
                ['title' => 'User', 'name' => 'User', 'route_name' => 'admin.user.user.index', 'feature_id' => 8, 'status' => 1],
                ['title' => 'Permission', 'name' => 'Permission', 'route_name' => 'admin.user.feature.index', 'feature_id' => 8, 'status' => 1],

            ['title' => 'Customer', 'name' => 'Customer', 'route_name' => 'admin.customer.index', 'feature_id' => null, 'status' => 1],//12

            ['title'=>'Menu','name' => 'Menu','route_name'=> 'admin/menu','feature_id'=>null,'status' => 1],//13
                ['title'=>'Main Menu','name' => 'Main Menu','route_name'=> 'admin.menu.menu.index','feature_id'=>13,'status' => 1],
                ['title'=>'Sub-menu','name' => 'Sub-menu','route_name'=> 'admin.menu.submenu.index','feature_id'=>13,'status' => 1],

            ['title'=>'Setting','name' => 'setting','route_name'=> 'admin/setting','feature_id'=>null,'status' => 1],//16
                ['title'=>'Site Setting','name' => 'site setting','route_name'=> 'admin.setting.setting.index','feature_id'=>16,'status' => 1],

            ['title'=>'Pages','name' => 'page','route_name'=>'admin/pages','feature_id'=>null,'status' => 1],//18
                ['title'=>'Home','name' => 'home','route_name'=> 'admin.page.home.create','feature_id'=>18,'status' => 1],
                ['title'=>'About','name' => 'About','route_name'=> 'admin.page.about.create','feature_id'=>18,'status' => 1],
                ['title' => 'Benefit', 'name' => 'Benefit', 'route_name' => 'admin.page.benefit.index', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Congratulation', 'name' => 'congrats', 'route_name' => 'admin.page.congrats.create', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Survival Guide', 'name' => 'survial', 'route_name' => 'admin.page.survival.create', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Feedback', 'name' => 'feedback', 'route_name' => 'admin.page.feedback.index', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Problem', 'name' => 'problem', 'route_name' => 'admin.page.problem.index', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Terms and Conditions', 'name' => 'terms', 'route_name' => 'admin.page.terms.create', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Billing', 'name' => 'billings', 'route_name' => 'admin.page.billings.index', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Subscription', 'name' => 'subscriptions', 'route_name' => 'admin.page.subscriptions.index', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Service', 'name' => 'services', 'route_name' => 'admin.page.services.index', 'feature_id' => 18, 'status' => 1],
                ['title'=>'Opportunity','name' => 'opportunity','route_name'=> 'admin.page.opportunitys.create','feature_id'=>18,'status' => 1],//20
                ['title' => 'Move to STZ', 'name' => 'moves', 'route_name' => 'admin.page.moves.index', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Integration to STZ', 'name' => 'integrations', 'route_name' => 'admin.page.integrations.index', 'feature_id' => 18, 'status' => 1],
                ['title' => 'Helps and Support', 'name' => 'helps', 'route_name' => 'admin.page.helps.create', 'feature_id' => 18, 'status' => 1],
            ['title'=>'Story','name' => 'Story','route_name'=> 'admin.stories.index','feature_id'=>null,'status' => 1],//34
        ];

        DB::table('features')->insert($n);
    }
}
