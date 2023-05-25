<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n =[
            "details" => "<p><strong>This Is Home Section heading</strong></p><p>&nbsp;</p><p>der text commonly used to demonstrate the visual for</p><p>m of a document or a typeface without relying on meaningful&nbsp;</p><p>content. Lore</p>",
           'image' => "image/home.png"
    ]; 
        DB::table('homes')->insert($n);
    }
}
