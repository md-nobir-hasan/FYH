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
        return [
             'name' =>$name,
             'slug' => Str::slug($name, '-'),
            'title' => $this->faker->text(25),
            'description' => $this->faker->text(350),
            'priority' => $this->faker->numberBetween(1, 100),
            'address' => $this->faker->address(),
            'profession' => 'teacher',
            'image' => 'image/demo.png',
            
        ];
    }
}
