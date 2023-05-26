<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(25),
            'title_description' => $this->faker->text(250),
            'heading' => $this->faker->text(35),
            'heading_description' => $this->faker->text(300),
            // 'images' => 'image/demo.png',
            'images_description' => $this->faker->text(600),
            'youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rIfdg_Ot-LI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            'youtube_description' => $this->faker->text(500),
            'first_image' => 'image/demo.png',
            'first_image_story' => $this->faker->text(300),
            'second_image' => 'image/demo.png',
            'second_image_story' => $this->faker->text(300),
        ];
    }
}
