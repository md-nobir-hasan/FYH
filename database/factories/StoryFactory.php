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
        $name = $this->faker->name();
        $image = $this->faker->randomElement(['image/man1.png','image/man2.png','image/man3.png','image/man4.png', 'image/man5.png', 'image/man6.png', 'image/man7.png', 'image/man8.png', 'image/man9.png', 'image/man10.png', 'image/man11.png']);
        return [
             'name' =>$name,
             'slug' => Str::slug($name, '-'),
            'title' => $this->faker->text(10),
            'description' => $this->faker->text(350),
            'priority' => $this->faker->numberBetween(1, 100),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'profession' => 'teacher',
            'image' => $image,
            'status' => 1,
            
        ];
    }
}
