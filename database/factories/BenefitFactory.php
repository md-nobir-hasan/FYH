<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Benefit>
 */
class BenefitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(16);
        $image = $this->faker->randomElement(['image/ben1.png','image/ben2.png','image/ben3.png','image/ben4.png', 'image/ben5.png', 'image/ben6.png', 'image/ben7.png', 'image/ben8.png', 'image/ben9.png', 'image/ben10.png', 'image/ben11.png']);
        return [
            'title' =>$title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->text(350),
            'priority' => $this->faker->numberBetween(1, 100),
            'image' => $image,
       ];
    }
}
