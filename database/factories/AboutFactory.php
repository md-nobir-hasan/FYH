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
            'title' => 'About Us',
            'title_description' => 'A relocation Service We Are Commited To building Jobs make Happy And Success',
            'heading' => 'FYH PROVIDE TO HELP SERVICE
            THAT HELP TO RELOCATE AND
            INTGRATE           ',
            'heading_description' => 'Being Human is more than just what our broken education system makes it out to be. <br class="br">
                    We teach the world the art of truly living extraordinary, fulfilling, happy lives.',
            'images' => '["image/about1.png","image/about2.png","image/about3.png","image/about4.png","image/about5.png","image/about6.png","image/about7.png","image/about8.png"]',
            'images_description' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.<br class='br'>
            That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth.",
            'first_image' => 'image/about1.png',
            'fimg_title' => 'My Best Decision<br><span class="ml-5">of Relocating</span> </h1>',
            'fimg_subtitle' => 'At FYH, learning is a lifelong adventure',
            'fimg_story' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth.",
            'second_image' => 'image/about2.png',
            'simg_title' => '<h1>Master Of</span> <br>Happiness in Here</h1>',
            'simg_subtitle' => 'At FYH, learning is a lifelong adventure',
            'simg_story' => "I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth.",
        ];
    }
}
