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
                ['title'=>'Client Type','name' => 'Client Type','status' => 1],
                ['title'=>'Membership','name' => 'Membership Type','status' => 1],
        ];

        DB::table('features')->insert($n);
    }
}
