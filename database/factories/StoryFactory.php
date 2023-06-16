<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(20);
        $image = $this->faker->randomElement(['image/story1.png','image/story2.png','image/story3.png','image/story4.png', 'image/story5.png', 'image/story6.png', 'image/story7.png', 'image/story8.png', 'image/story9.png', 'image/story10.png', 'image/story11.png',
        'image/story12.png','image/story13.png','image/story14.png','image/story15.png','image/story16.png', 'image/story17.png','image/story18.png'
     ]);
        return [
             'name' =>$this->faker->text(20),
             'slug' => Str::slug($title, '-'),
            'title' => $this->faker->text(35),
            'description' => $this->faker->text(800),
            'priority' => $this->faker->numberBetween(1, 100),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'profession' => 'teacher',
            'image' => $image,
            'status' => 1,
            'country_id' => $this->faker->numberBetween(1,10),
            'feature' => $this->faker->numberBetween(0,1),
            'user_id' => 2,
            
        ];
    }
}
