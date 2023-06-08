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
             'heading' => 'congratulation',
             'title' => 'On Subscribing To FYh',
             'subtitle' => 'Now You Have Access To:',
               'opOne' => 'High standard of living Geographical location',
               'opTwo' => ' Beautiful nature and opportunity to relax without leaving the country',
               'opThree' => 'Medicine of the highest level',
               'opFour' => 'Education based on high standards',
               	'icon' => '✓',
               	'option_title' => 'What Is More Relevant For You ',
                	'button_one' => 'Plan To Move',
                     'button_two' => 'Already Relocated'
        ];
    }
}
