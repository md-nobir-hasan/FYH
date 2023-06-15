<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Help>
 */
class HelpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->randomElement(['Getting Started','Bilging','Legal','Trust & Safety', 'Community', 'Events']);
        $image = $this->faker->randomElement(['image/help1.png','image/help2.png','image/help3.png','image/help4.png', 'image/help5.png', 'image/help6.png']);
        return [
             'title' => $title,
             'image' => $image,
             'description' => $this->faker->text(150),
        ];
    }
}
