<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //link ids are
            //1 = home
            //2 = Membership page

        $menu = [
            //for normal use
            ['name'=>'Membership','link_id'=>3,'client_type_id'=>null,'serial'=>2],
            ['name'=>'Community','link_id'=>4,'client_type_id'=>null,'serial'=>3],
            ['name'=>'Benefits','link_id'=>5,'client_type_id'=>null,'serial'=>4],
            ['name'=>'About','link_id'=>6,'client_type_id'=>null,'serial'=>5],
            ['name'=>'Guide','link_id'=>null,'client_type_id'=>null,'serial'=>6],//5

            //basic user
            ['name'=>'Share Story','link_id'=>7,'client_type_id'=>1,'serial'=>1],
            ['name'=>'Benefits','link_id'=>5,'client_type_id'=>1,'serial'=>4],
            ['name'=>'About','link_id'=>6,'client_type_id'=>1,'serial'=>5],
            ['name'=>'Community','link_id'=>4,'client_type_id'=>1,'serial'=>3],
            ['name'=>'Guide','link_id'=>null,'client_type_id'=>1,'serial'=>6],//5
            //pro user
            ['name'=>'Community','link_id'=>4,'client_type_id'=>2,'serial'=>3],
            ['name'=>'Share Story','link_id'=>7,'client_type_id'=>2,'serial'=>1],
            ['name'=>'Benefits','link_id'=>5,'client_type_id'=>2,'serial'=>4],
            ['name'=>'About','link_id'=>6,'client_type_id'=>2,'serial'=>5],
            ['name'=>'Guide','link_id'=>null,'client_type_id'=>2,'serial'=>6],//5

        ];
        DB::table('menus')->insert($menu);

        $submenus = [
            //normal user
            ['menu_id'=>5,'name'=>'Survival Guide','link_id'=>8,'client_type_id'=>null,'serial'=>1],
            ['menu_id'=>5,'name'=>'Move To Switzerland','link_id'=>9,'client_type_id'=>null,'serial'=>2],
            ['menu_id'=>5,'name'=>'Intregation In Switzerland','link_id'=>10,'client_type_id'=>null,'serial'=>3],

            //Basic user
            ['menu_id'=>10,'name'=>'Survival Guide','link_id'=>8,'client_type_id'=>1,'serial'=>1],
            ['menu_id'=>10,'name'=>'Move To Switzerland','link_id'=>9,'client_type_id'=>1,'serial'=>2],
            ['menu_id'=>10,'name'=>'Intregation In Switzerland','link_id'=>10,'client_type_id'=>1,'serial'=>3],

            //pro user
            ['menu_id'=>15,'name'=>'Survival Guide','link_id'=>8,'client_type_id'=>2,'serial'=>1],
            ['menu_id'=>15,'name'=>'Move To Switzerland','link_id'=>9,'client_type_id'=>2,'serial'=>2],
            ['menu_id'=>15,'name'=>'Intregation In Switzerland','link_id'=>10,'client_type_id'=>2,'serial'=>3],

        ];
        DB::table('submenus')->insert($submenus);
    }
}
