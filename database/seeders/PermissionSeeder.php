<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = [
                ['role_id' => 1,'feature_id' => 1,'add' => '1','show' => '2','edit' => '3','delete' => '4'],
                ['role_id' => 1,'feature_id' => 2,'add' => '1','show' => '2','edit' => '3','delete' => '4'],
                ['role_id' => 1,'feature_id' => 3,'add' => '1','show' => '2','edit' => '3','delete' => '4'],
                ['role_id' => 1,'feature_id' => 4,'add' => '1','show' => '2','edit' => '3','delete' => '4'],
                ['role_id' => 1,'feature_id' => 5,'add' => '1','show' => '2','edit' => '3','delete' => '4'],
                ['role_id' => 1,'feature_id' => 6,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Customer
                ['role_id' => 1,'feature_id' => 7,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Setup
                ['role_id' => 1,'feature_id' => 8,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Client Type
                ['role_id' => 1,'feature_id' => 9,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Membership Type
                ['role_id' => 1,'feature_id' => 10,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Benefit
                ['role_id' => 1,'feature_id' => 11,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Link
                ['role_id' => 1,'feature_id' => 12,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Menue
                ['role_id' => 1,'feature_id' => 13,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Main Menu
                ['role_id' => 1,'feature_id' => 14,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Sub-menu
                ['role_id' => 1,'feature_id' => 15,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Sub-menu
                ['role_id' => 1,'feature_id' => 16,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Sub-menu
                ['role_id' => 1,'feature_id' => 17,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Setting
                ['role_id' => 1,'feature_id' => 18,'add' => '1','show' => '2','edit' => '3','delete' => '4'],//Site Setting
            ];

            DB::table('permissions')->insert($n);

    }
}
