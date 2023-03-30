<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n =['name' => "Super Admin",
            'email' => "admin@gmail.com",
            'phone' => "01518460933",
            'role_id' => 1,
            'password' => Hash::make(12345678),
            ];

        DB::table('users')->insert($n);
    }
}
