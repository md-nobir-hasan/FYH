<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Integration>
 */
class IntegrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(35);
        $image = $this->faker->randomElement(['image/intre1.png','image/intre2.png','image/intre3.png','image/intre4.png', 'image/intre5.png', 'image/intre6.png', 'image/intre7.png', 'image/intre8.png']);
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
