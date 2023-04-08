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
            ];

            DB::table('permissions')->insert($n);

    }
}
