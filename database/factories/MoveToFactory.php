<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MoveTo>
 */
class MoveToFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(35);
        $image = $this->faker->randomElement(['image/move1.png','image/move2.png','image/move3.png','image/move4.png', 'image/move5.png', 'image/move6.png', 'image/move7.png', 'image/move8.png']);
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->text(350),
            'image' => $image,
            'priority' => $this->faker->numberBetween(1,400),
            'status' => 1
        ];
    }
}
