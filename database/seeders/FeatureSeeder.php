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
            ['name' => 'Category','status' => 1],
            ['name' => 'Sub-category','status' => 1],
            ['name' => 'Slider Image','status' => 1],
            ['name' => 'Banner Image','status' => 1],
            ['name' => 'Shipping','status' => 1],
            ['name' => 'Brand','status' => 1],
            ['name' => 'Order','status' => 1],
            ['name' => 'Order Status','status' => 1],
            ['name' => 'Payment System','status' => 1],
            ['name' => 'Customer Contact','status' => 1],
            ['name' => 'Site Info','status' => 1],
            ['name' => 'User Management','status' => 1],
            ['name' => 'Role','status' => 1],
            ['name' => 'User Creation','status' => 1],
            ['name' => 'Product','status' => 1],
            ['name' => 'Images','status' => 1],
            ['name' => 'Setting','status' => 1],
            ['name' => 'setup','status' => 1],
            ['name' => 'Features','status' => 1],
            ['name' => 'Site Setting','status' => 1],
            ['name' => 'Main Keys','status' => 1],
            ['name' => 'Services','status' => 1],
            ['name' => 'Setting Setup','status' => 1],
            ['name' => 'Setup size','status' => 1],
            ['name' => 'Setup color','status' => 1],
            ['name' => 'Pixel tag','status' => 1],
            ['name' => 'Google tag','status' => 1],
        ];

        DB::table('features')->insert($n);
    }
}
