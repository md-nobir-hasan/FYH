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
            'heading' => 'Thank You',
            'title' => 'On Subscribing To FYh',
            'des' => 'As a new member of FYH, you are not part of a community of like-minded people whose <br class="con-br">
                goal is to relocate to Switzerland or who have already achieved it.',
            'button_one' => 'Plan To Move',
            'button_two' => 'Already Relocated'
        ];
    }
}
