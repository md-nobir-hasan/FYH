<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Congrat>
 */
class CongratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'image/badge.png',	
             'title' => $this->faker->text(20),
             'subtitle' => $this->faker->text(80),
               'description' => '<p>✅ High standard of living Geographical location</p><p>✅ Beautiful nature and opportunity to relax without<br>✅ leaving the country</p><p>✅ Medicine of the highest level</p><p>✅ Education based on high standards</p>',
               	'option_title' => $this->faker->text(25),
                	'button_one' => $this->faker->text(15),
                     'button_two' =>$this->faker->text(15)
        ];
    }
}
