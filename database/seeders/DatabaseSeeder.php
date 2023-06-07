<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Benefit;
use App\Models\Congrat;
use App\Models\Integration;
use App\Models\MoveTo;
use App\Models\Opportunity;
use App\Models\Service;
use App\Models\Story;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(FeatureSeeder::class);
        $this->call(SetupSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(userSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(HomeSeeder::class);

        Benefit::factory(16)->create();
        Service::factory(15)->create();
        Story::factory(15)->create();
        About::factory(1)->create();
        Congrat::factory(1)->create();
        Opportunity::factory(1)->create();
        MoveTo::factory(8)->create();
        Integration::factory(8)->create();
    }
}
