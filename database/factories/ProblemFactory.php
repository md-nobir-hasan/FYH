<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problem>
 */
class ProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => $this->faker->text(15),
           'description' => $this->faker->text(200),
           'answer' => $this->faker->text(200),
           'status' => $this->faker->numberBetween(0,1),
         'solveDate' => $this->faker->dateTime(),
         'user_id' => $this->faker->numberBetween(2,5),
        ];
    }
}
