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
            'heading' => 'FYH PROVIDE TO HELP SERVICES THAT HELP TO RELOCATE AND INTGRATE',
            'heading_description' => 'Being Human Is more Than Just what Our Broken Education System To make It Out to Be. We Teach The World The Art Of truly Living Extrorfinary fullfiling And Happy lifes',
            'images' => '["image\/jg1UvPmp0xzQwl85DUKFaNbsDW0SERsTfYUmVsDy.jpg","image\/Qihxfp0arsvdMbgOj0JkXKXbbhEYZj3bj9yOGSWk.jpg","image\/Ib23yab7eHfrwsfCORQQn9PyKipXhJlkLN1EXciT.jpg","image\/VXeNCbAUWxGvHyTvz2LeMcY5CIjU46g43uaq0r9e.jpg","image\/jCqmV7SFesnztGU6sEBdL5cRTVJvyYmhDJGl79AE.jpg","image\/OyWEHljAIO3JJ5NBtxVCA5PszkmlEVvizRLuKECX.jpg","image\/XhNnVuqdkyYrOZT30F2xhdPncGjyLcKYgN0ICojy.jpg","image\/T4qiAzu8WHFcHTvU859sNDmnGxEYgB4ul4AmYvWY.jpg"]',
            'images_description' => 'Ullam doloribus reiciendis illum perferendis eos ipsum unde. Quisquam nostrum qui architecto eaque ut voluptatem tempora. Vel ut eos libero ipsam. Et et ut libero iusto nesciunt minima. Quia quae quasi quis facere excepturi. Aut deleniti aut doloremque vitae at sequi reiciendis. Voluptatem quo dignissimos perspiciatis unde quae dolorem. Incidunt est eaque consectetur nisi totam sed aspernatur. Autem ullam est rerum id velit voluptas. Nesciunt cupiditate ut aut ipsum voluptatum accusamus.',
            'youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rIfdg_Ot-LI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            'youtube_description' => $this->faker->text(500),
            'first_image' => 'image/about1.png',
            'first_image_story' => $this->faker->text(400),
            'second_image' => 'image/about2.png',
            'second_image_story' => $this->faker->text(400),
        ];
    }
}
