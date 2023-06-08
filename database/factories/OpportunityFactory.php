<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opportunity>
 */
class OpportunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Welcome to FYH membership page',
            'heading' => 'Select your Best plan',
            'subtitle' => 'What You Get when You become a Member of the FYH',
            'opOne' => 'High standard of living Geographical location',
            'opTwo' => 'Beautiful nature and opportunity to relax without',
            'opThree' => 'leaving the country',
            'opFour' => 'Medicine of the highest level',
            'opFive' => 'Education based on high standards',
            'opSix' => 'Political neutrality',
            'opSeven' => 'Types of visas and residence permits',
            'opEight' => 'How to find a job before you move to Switzerland',
            'opNine' => 'If You are moving with a family',
            'icon' => '✓',
            
        ];
    }
}


