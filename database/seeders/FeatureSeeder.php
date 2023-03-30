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
            ['name' => 'Home','status' => 1],
            ['name' => 'User Management','status' => 1],
            ['name' => 'Role','status' => 1],
            ['name' => 'User','status' => 1],
            ['name' => 'Permission','status' => 1],
        ];

        DB::table('features')->insert($n);
    }
}
