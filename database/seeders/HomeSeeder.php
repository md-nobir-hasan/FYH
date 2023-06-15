<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n =[
          //  "details" => '<h1 style="text-align: justify;"><b>Do You Want To move</b></h1><h1 style="text-align: justify;"><b>In&nbsp; Switzerland ?</b></h1><h6><b><span style="font-size: 1.25rem; text-align: start;">At FYH Service You Can Find All Necessary</span><font face="Playfair Display, serif" style="font-size: 1.25rem; text-align: start;"><span style="font-size: 49px; font-variant-ligatures: no-common-ligatures; letter-spacing: 0.4px;">&nbsp;</span></font><span style="font-size: 1.25rem; text-align: start;">information to take decision That can Change Your Life</span></b></h6><h1 style="text-align: justify;"><p><b>Already Relocated</b></p></h1><h6 style="text-align: justify; "><span style="font-size: 1.25rem; text-align: center;"><b>At FYH Service You Can Find All nessecary information To integrate to Switzerland</b></span></h6><h6 style="--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; text-align: justify;"><br></h6>',
           'image' => "image/home.png",
           'title_one' => 'Do you want to move Switzerland ?',
           'title_one_description' => 'At FYH Service You Can Find All Necessary information to take decision That can Change Your Life',
           'title_two'=> 'Already Relocated ?',
          'title_two_description' => 'At FYH Service You Can Find All necessary information To integrate to Switzerland',
          'benefit_title' => 'Benefits of living in Switzerland',
           'benefit_subtitle' => 'Why is Switzerland so attractive for living and working?',
           'story_title' => 'The Most Popular Story',
            'story_subtitle' => 'Here’s all of the successful stories of our customers',
        'feature_title' => 'Featured story',
           'feature_subtitle' => 'Here The Successful Story Our Customers',
          'image_title' => 'Successful Story s Of The candidate',
          'image_subtitle' =>"I was struggling to find a job that aligned with my skill and experiance and i was starting before this program i was strugling remember thing's such a pin number, important date",
          'lgImage' => "image/successStory.png",
          'service_title' => 'How To Get The Services',
          'service_subtitle' => 'Our Application process is very easy to use and user friendly. Let’s start...',
          'customer_title' => 'What Our Member Say',
           'customer_subtitle' => "Here’s all of the successful stories of our customers",
          'share_title' => 'We Are Exited To Here Your Story',
          'share_subtitle' => "our company run on voices like yours. it keep us Going, and keeps us grounded . tell us like it is . What's your Story",
         'move_title' => 'Moving To Switzerland',
         'move_subtile' => 'This guide will help you to integrate easier, more meaningful and fun',
         'intr_title' => 'Integration In Switzerland',
         'intr_subtile' => 'This guide will help you to integrate easier, more meaningful and fun',
         'help_image' => 'image/helpBanner.png',
         'help_title' => 'How can we help you, Thomas?',
          'help_subtile' => 'CHOOSE A CATEGORY TO FIND THE HELP YOU NEED',
         'thank_heading' => 'Thank you',
         'thank_image' => 'image/thanks.png',
          'thank_subtitle' => 'Work hard and Follow Your Heart!',
          'thank_title' => 'For sharing your story!',
    ]; 
        DB::table('homes')->insert($n);
    }
}
