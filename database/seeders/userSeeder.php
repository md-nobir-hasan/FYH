<?php

namespace Database\Seeders;

use App\Models\User;
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
        $n =[
            //admin (developer)
               [
                'fname' => "Developer",
                // 'lname' => "Admin",
                'email' => "nobir.wd@gmail.com",
                'phone' => "01518460933",
                'role_id' => 1,
                'password' => Hash::make('fkd#3S)#LD>)L'),
                'img' => '/storage/user/profile.png',
               ],
               [
                'fname' => "Super Admin",
                // 'lname' => "Admin",
                'email' => "support@fyh.ch",
                'phone' => "12345678910",
                'role_id' => 1,
                'password' => Hash::make('94jf&shf^#nG'),
                'img' => '/storage/user/profile.png',
               ],
            //Paid Users
               [
                'fname' => "Thomas T.",
                // 'lname' => "T.",
                'email' => "thomas@gmail.com",
                'phone' => "123456875645",
                // 'client_type_id' => 2,
                'role_id' => null,
                'password' => Hash::make(12345678),
                'img' => '/storage/user/profile.png',
               ],
            ];

        DB::table('users')->insert($n);
    }
}

