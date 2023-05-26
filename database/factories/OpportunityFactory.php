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
            'title' => 'Select your Best plan',
            'subtitle' => 'What You Get when You become a Member of the FYH',
            'description' => '<ol><li>✅High standard of living Geographical location</li><li>✅Beautiful nature and opportunity to relax without<br>✅leaving the country</li><li>✅Medicine of the highest level</li><li>✅Education based on high standards</li><li>✅Political neutrality</li><li>✅Types of visas and residence permits</li><li>✅How to find a job before you move to Switzerland</li><li>✅If You are moving with a family</li></ol>',
            'benefit_title' => 'Benefits of living in Switzerland',
            'benefit_subtitle' => 'Why is Switzerland so attractive for living and working?',
            'story_title' => 'Our Success Story',
            'story_subtitle' => 'Here’s all of the successful stories of our cusomers',
            'service_title' => 'How To Get The Services',
            'service_subtitle' => 'Our Application process is very easy to use and user friendly. Let’s start...',
        ];
    }
}
