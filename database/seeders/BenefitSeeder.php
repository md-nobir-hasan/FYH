<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $data = [
            [
                'title'=>'Living Standard',
                'first_para'=>"Welcome to the heart of Europe, where the awe-inspiring Alps meet idyllic cities, and where life's quality is as breathtaking as the landscape. <br class='b-br'>",
                'image'=>'image/sofa.svg',
                'priority'=>1,
                'rest_para'=>"In Switzerland, the standard of living is much more than a statistic. It's a tangible reality that you can see, touch, and experience in every facet of daily life. From world-renowned education and healthcare systems to robust public transport and innovative infrastructure, Switzerland excels in providing a quality of life that's second to none. <br class='b-br'><br class='b-br'>

                But there's so much more that makes Switzerland unique. It's where cutting-edge innovation blends seamlessly with centuries-old traditions. Where bustling, cosmopolitan cities lie just a short drive away from serene, picturesque villages. Where you can savor world-class chocolates and cheeses one moment, and take in the grandeur of pristine, snow-capped mountains the next.<br class='b-br'><br class='b-br'>

                Whether you're attracted by its dynamic economy, its harmonious blend of cultures, or simply the promise of a clean, safe, and peaceful environment for you and your family, Switzerland invites you to experience a lifestyle that truly stands apart.",
            ],
            [
                'title'=>'Geography',
                'first_para'=>"Centrally located amidst the iconic beauty of Europe, Switzerland stands as a testament to nature's splendor and human innovation.<br class='b-br'>",
                'image'=>'image/geography.svg',
                'priority'=>2,
                'rest_para'=>"Tucked away in the Alpine region, Switzerland shares its borders with five countries - Germany to the north, France to the west, Italy to the south, and Austria and Liechtenstein to the east. This unique positioning makes it a cultural melting pot, boasting of rich linguistic diversity and a harmonious blend of traditions.<br class='b-br'><br class='b-br'>

                Encompassing a land area of 41,290 square kilometers, Switzerland is a tapestry of majestic mountain peaks, serene lakes, and vibrant cities. It's the home of the famous Swiss Alps, which cover about 60% of the country’s total land area, making it a paradise for mountaineering and winter sports enthusiasts. Meanwhile, the Swiss Plateau runs across the country, hosting most of the population and economic activity, including the dynamic urban centers of Zurich, Bern, and Geneva.<br class='b-br'><br class='b-br'>

                At the southernmost tip, you'll find the Mediterranean-influenced Canton of Ticino, offering a delightful mix of Italian flair, palm-lined lakes, and Alpine landscapes. And let’s not forget the stunning Rhine River flowing in the north, adding to Switzerland's charm and allure.<br class='b-br'><br class='b-br'>

                Despite its landlocked nature, Switzerland is anything but isolated. Its well-established transport networks - featuring some of the world's most scenic train routes - ensure seamless connectivity to the rest of Europe, making it an ideal base for exploring the continent.<br class='b-br'><br class='b-br'>

                Intrigued by Switzerland's geographical allure? Click the link below to delve deeper into the natural splendors and strategic benefits of Switzerland's prime location.",
            ],
            [
                'title'=>'Climate',
                'first_para'=>"Switzerland, famed for its Alpine splendor, is a land where the weather paints a dynamic backdrop to an already breathtaking canvas.",
                'image'=>'image/climate.svg',
                'priority'=>3,
                'rest_para'=>"The Swiss climate is predominantly temperate, but the country's varied topography means you'll experience microclimates as you explore. Whether it's the sun-drenched valleys of Ticino or the crisp, snowy landscapes of the Alps, there’s a corner of Switzerland that offers the perfect climate for you.<br class='b-br'>
                Winter, spanning from December to March, transforms Switzerland into a snowy paradise, ideal for winter sports. World-renowned ski resorts like Zermatt and St. Moritz come alive, offering unforgettable snowy adventures amidst panoramic mountain vistas.<br class='b-br'>
                As the snow melts, Spring ushers in a burst of color and life. From April to June, witness Switzerland's landscapes transform into vibrant expanses of wildflowers and green meadows, a treat for nature lovers and photographers alike.<br class='b-br'>
                Summer, from July to September, is warm and pleasant. The Alps offer respite from the heat, while the lakes invite you for a refreshing dip. It’s the perfect time for hiking, cycling, or simply basking in the sunshine in Switzerland's picturesque towns and cities.<br class='b-br'>
                Autumn, from October to November, drapes the country in stunning hues of orange, red, and gold. The vineyards are ripe for the harvest, and the forests become a haven for tranquil walks.<br class='b-br'>
                No matter the season, Switzerland’s climate adds to the country's charm, offering something unique at every turn. Ready to experience it for yourself? Click the link below and immerse yourself in the captivating climate of Switzerland.",
            ],
            [
                'title'=>'Ecology',
                'first_para'=>"In the heart of Europe lies Switzerland, a country renowned not just for its picturesque landscapes and high standard of living.<br class='b-br'>",
                'image'=>'image/becology.svg',
                'priority'=>4,
                'rest_para'=>"Nestled among the towering Swiss Alps, tranquil lakes, and lush forests are a myriad of ecosystems. From the rare alpine plants that dot the mountain ridges, to the diverse bird species that make their home in the verdant Jura mountains and the myriad of aquatic life that teems in the Rhine River, Switzerland's biodiversity is truly captivating.<br class='b-br'><br class='b-br'>

                However, it's not just the natural biodiversity that sets Switzerland apart. It's the country's unwavering commitment to environmental sustainability and conservation. With its policies promoting renewable energy, stringent recycling programs, and initiatives to preserve its native species and habitats, Switzerland continually demonstrates that progress and ecology can go hand in hand.<br class='b-br'><br class='b-br'>

                As you explore Switzerland's ecological landscape, you'll see a nation where sustainable living is a way of life, not just an ideal. Whether it's the high-altitude research carried out in the Alps to combat climate change, the protected status of expansive nature parks, or the green roofs of urban buildings, every facet of Swiss life reflects a dedication to ecological balance and preservation.",
            ],
            [
                'title'=>'Nature',
                'first_para'=>"Welcome to the natural grandeur of Switzerland, a land where emerald valleys meet soaring peaks, and tranquil lakes mirror the drama of the skies. <br class='b-br'>",
                'image'=>'image/nature.svg',
                'priority'=>5,
                'rest_para'=>"Home to some of Europe's most impressive mountain ranges, Switzerland's heart beats in rhythm with the Alps. Here, snow-capped peaks tower over sprawling valleys, providing stunning backdrops for hiking, skiing, and mountain biking. From the iconic Matterhorn to the majestic Jungfrau, the Swiss Alps are a testament to nature's awe-inspiring beauty.<br class='b-br'><br class='b-br'>

                Beyond the mountains, Switzerland reveals itself in a tapestry of serene lakes, roaring rivers, and verdant pastures. With over 1,500 lakes dotting the country, water plays a pivotal role in the Swiss landscape. Explore the crystal-clear waters of Lake Geneva or the mesmerizing blue of Lake Lucerne for a taste of Switzerland's aquatic allure.<br class='b-br'><br class='b-br'>

                Switzerland's lowlands, too, offer their own charm. From the rolling Jura mountains to the dense, verdant forests of Ticino, Switzerland's nature unfolds in myriad forms. It's here that you'll find a variety of flora and fauna, showcasing the country's rich biodiversity.<br class='b-br'><br class='b-br'>

                But Switzerland's natural wonders aren't just for admiring. They form an integral part of Swiss life. Locals and visitors alike are encouraged to explore these landscapes through well-maintained hiking trails, cycling paths, and winter sports facilities.",
            ],
            [
                'title'=>'Safety',
                'first_para'=>"Experience the tranquility and security that is a country globally recognized for its high safety standards and exceptional quality of life.<br class='b-br'>",
                'image'=>'image/safety.svg',
                'priority'=>6,
                'rest_para'=>"
                Safety in Switzerland is not an afterthought but an integral part of its ethos. This commitment reflects in its low crime rates, stringent law enforcement, and the overall sense of security that pervades both urban areas and countryside.<br class='b-br'><br class='b-br'>

                From bustling cities like Zurich and Geneva to the quiet, picturesque towns nestled in the Alps, residents and visitors alike can enjoy peace of mind. Switzerland's commitment to public safety ensures that whether you're navigating the lively city streets or exploring serene mountain trails, you're in a safe environment.<br class='b-br'><br class='b-br'>

                Switzerland's strong emphasis on social cohesion and respect for the rule of law also contributes to its reputation as a safe country. Here, individual rights are cherished, and mutual respect is deeply ingrained in the social fabric, creating a peaceful and harmonious society.<br class='b-br'><br class='b-br'>

                Moreover, the country's impressive infrastructure also extends to public safety, with well-maintained roads, reliable public transportation, and responsive emergency services. These factors, coupled with the country's political stability, make Switzerland one of the safest places to live and travel in the world.",
            ],
            [
                'title'=>'Healthcare',
                'first_para'=>"Switzerland stands as a beacon of world-class healthcare. Switzerland's healthcare system consistently ranks among the best in the world.<br class='b-br'>",
                    'image'=>'image/Medicine.svg',
                    'priority'=>7,
                    'rest_para'=>"The foundation of Switzerland's healthcare success lies in its dedication to universal health coverage. Mandated health insurance ensures that everyone - Swiss nationals and expatriates alike - have access to comprehensive medical services. From routine check-ups and preventative care to specialized treatments and emergency services, healthcare in Switzerland is all-encompassing and patient-centered.<br class='b-br'><br class='b-br'>

                    The quality of care provided is exceptional, boasting a high doctor-to-patient ratio, advanced medical technology, and a strong focus on research and development. Switzerland is home to some of the world's best hospitals and research institutions, making it a leader in medical innovation and treatments.<br class='b-br'><br class='b-br'>

                    An integral part of Switzerland's healthcare system is its emphasis on prevention and public health. Regular health screenings, public health initiatives, and a robust network of pharmacies ensure that preventive care is easily accessible to all residents.<br class='b-br'><br class='b-br'>

                    Switzerland's approach to healthcare extends beyond physical health. Recognizing the importance of mental well-being, the Swiss healthcare system also provides comprehensive mental health services, ensuring holistic care for every individual.",
            ],
            [
                'title'=>'Education',
                'first_para'=>"Welcome to the landscape of Swiss education, a place where innovative learning, and holistic development converge to extend future leaders.",
                        'image'=>'image/education.svg',
                        'priority'=>8,
                        'rest_para'=>"Education in Switzerland is a testament to the country’s commitment to nurturing intellect and character. At its core is the promise of quality, equity, and accessibility, offering a robust learning experience to every student.<br class='b-br'><br class='b-br'>

                        From early childhood education to primary and secondary schooling, and all the way to university studies and vocational training, the Swiss education system offers a diverse range of pathways, catering to different interests and talents. This flexibility allows every student to find their niche and excel.<br class='b-br'><br class='b-br'>

                        With one of the world’s highest rates of education spending per student, Switzerland is a breeding ground for academic achievement and innovation. It is home to globally renowned universities and research institutions, making significant contributions to science, technology, humanities, and arts.<br class='b-br'><br class='b-br'>

                        Language learning forms an integral part of the Swiss curriculum, reflecting the country's multicultural fabric. Students typically learn two or more national languages, along with English, fostering multicultural understanding and opening international opportunities.<br class='b-br'><br class='b-br'>

                        Beyond academics, Swiss schools emphasize sports, arts, and civic education, nurturing well-rounded individuals ready to contribute positively to society.",
            ],
            [
                'title'=>'Political System',
                'first_para'=>"Discover Switzerland's unique political landscape, a testament to stability and decentralization that sets it apart on the global stage.<br class='b-br'>",
                        'image'=>'image/politics.svg',
                        'priority'=>9,
                        'rest_para'=>"
                        Switzerland operates under a federalist system, dividing power between the Federal Government, cantons, and communes, which allows each part of the country to maintain a degree of autonomy. This structure emphasizes local governance, ensuring that political decisions often reflect the specific needs of local populations.<br class='b-br'><br class='b-br'>

                        At the heart of Switzerland's political system is the Swiss Confederation's Federal Council, a seven-member executive council that serves as the government's collective head. Unlike many other nations where power is concentrated in a single individual, the Swiss model emphasizes collective decision-making and shared responsibility.<br class='b-br'><br class='b-br'>

                        Switzerland's commitment to direct democracy is another distinguishing feature. Citizens regularly participate in referendums to voice their opinion on a wide array of issues, from local matters to foreign policy. This involvement allows the Swiss people to play an active role in shaping their nation's laws and policies.<br class='b-br'><br class='b-br'>

                        Political stability, respect for the rule of law, and transparency are cornerstones of the Swiss political environment. These principles, combined with Switzerland's neutral stance in global affairs, contribute to its reputation as a reliable and peace-promoting nation.",
            ],
        ];
        DB::table('benefits')->insert($data);
    }
}
