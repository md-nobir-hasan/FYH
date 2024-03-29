<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Benefit;
use App\Models\Congrat;
use App\Models\Country;

use App\Models\Help;
use App\Models\Integration;
use App\Models\MoveTo;
use App\Models\Opportunity;
use App\Models\Problem;
use App\Models\Service;
use App\Models\Story;
use App\Models\Term;
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
        $this->call(SurvivalSedder::class);
        $this->call(BenefitSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(StorySeeder::class);
        $this->call(MoveToSeeder::class);

        // Benefit::factory(16)->create();
        // Service::factory(8)->create();
        // Story::factory(18)->create();
        About::factory(1)->create();
        Congrat::factory(1)->create();
        Opportunity::factory(1)->create();
        // MoveTo::factory(8)->create();
        Integration::factory(8)->create();//Intregation seeder is created but not implement.
        Help::factory(6)->create();
        Term::factory(1)->create();
        // Country::factory(10)->create();
        Problem::factory(10)->create();


    }
}
