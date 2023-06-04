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
            "details" => '<h1 style="text-align: justify;"><b>Do You Want To move</b></h1><h1 style="text-align: justify;"><b>In&nbsp; Switzerland ?</b></h1><h6><b><span style="font-size: 1.25rem; text-align: start;">At FYH Service You Can Find All Necessary</span><font face="Playfair Display, serif" style="font-size: 1.25rem; text-align: start;"><span style="font-size: 49px; font-variant-ligatures: no-common-ligatures; letter-spacing: 0.4px;">&nbsp;</span></font><span style="font-size: 1.25rem; text-align: start;">information to take decision That can Change Your Life</span></b></h6><h1 style="text-align: justify;"><p><b>Already Relocated</b></p></h1><h6 style="text-align: justify; "><span style="font-size: 1.25rem; text-align: center;"><b>At FYH Service You Can Find All nessecary information To integrate to Switzerland</b></span></h6><h6 style="--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; text-align: justify;"><br></h6>',
           'image' => "image/home.png"
    ]; 
        DB::table('homes')->insert($n);
    }
}
