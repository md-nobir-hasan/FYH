<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $title = $this->faker->text(55);
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->text(350),
            'priority' => $this->faker->numberBetween(1, 100),
            'image' => 'image/demo.png',
        ];
    }
}
