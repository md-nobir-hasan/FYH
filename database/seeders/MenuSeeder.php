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
            ['name'=>'Membership','link_id'=>2,'client_type_id'=>null,'serial'=>1],
            ['name'=>'Comunity','link_id'=>2,'client_type_id'=>null,'serial'=>2],
            ['name'=>'Benefits','link_id'=>2,'client_type_id'=>null,'serial'=>3],
            ['name'=>'Guid','link_id'=>2,'client_type_id'=>null,'serial'=>4],
            ['name'=>'Discover','link_id'=>2,'client_type_id'=>null,'serial'=>5],
            ['name'=>'About','link_id'=>2,'client_type_id'=>null,'serial'=>6],
        ];
        DB::table('menus')->insert($menu);

        $submenus = [
            ['menu_id'=>4,'name'=>'Moving To Switzerland','link_id'=>2,'serial'=>1],
            ['menu_id'=>4,'name'=>'Intregation To Switzerland','link_id'=>2,'serial'=>2],
        ];
        DB::table('submenus')->insert($submenus);
    }
}
