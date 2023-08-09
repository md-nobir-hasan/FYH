<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Term>
 */
class TermFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'term' => '<div class="lg:mx-20 lg:my-10">
                            <h1 class="text-2xl font-bold text-[#212427]">Terms & Conditions</h1>
                            <p class="text-lg mt-2 text-[#212427]">Welcome to FYH. These Terms & Conditions ("Terms") govern your use of our website and services. By accessing or using our website, you agree to be bound by these Terms. If you do not agree to these Terms, please refrain from using our website or services.</p>
                            <h1 class="text-xl font-bold text-[#212427]">User Responsibilites</h1>
                            <p class="mt-2">
                                <li class="ml-3 text-[#212427]">You are responsible for your actions and conduct while using our website or services</li>
                                <li class="ml-3 text-[#212427]">You must comply with all applicable laws and refrain from engaging in prohibited activities.</li>
                            </p>
                            <h1 class="text-xl  mt-5 font-bold text-[#212427]">Intellectual Property</h1>
                            <p class="mt-2">
                                <li class="ml-3 text-[#212427]">All content and materials on our website are protected by intellectual property rights.</li>
                                <li class="ml-3 text-[#212427]">You may not use, reproduce, or distribute any content or materials without our explicit permission.</li>
                            </p>
                            <h1 class="text-xl mt-5 font-bold text-[#212427]"> Privacy and Data Protection:</h1>
                            <p class="mt-2">
                                <li class="ml-3 text-[#212427]">We collect and use your personal information in accordance with our Privacy Policy.</li>
                                <li class="ml-3 text-[#212427]">We may use cookies or similar technologies to enhance your experience on our website.</li>
                            </p>
                            <h1 class="text-xl mt-5 font-bold text-[#212427]">Limitations of Liability:</h1>
                            <p class="mt-2">
                                <li class="ml-3 text-[#212427]">We disclaim any liability for damages, losses, or harm arising from your use of our website or services. </li>
                                <li class="ml-3 text-[#212427]">You use our website and services at your own risk.</li>
                            </p>
                            <h1 class="text-xl mt-5 font-bold text-[#212427]">Termination:</h1>
                            <p class="mt-2">
                                <li class="ml-3 text-[#212427]">We reserve the right to terminate or suspend your access to our website or services under certain circumstances.</li>
                                <li class="ml-3 text-[#212427]">Termination may result in the loss of access to your account or related content.</li>
                            </p>
                            <h1 class="text-xl mt-5 font-bold text-[#212427]">Modifications and Updates:</h1>
                            <p class="mt-2">
                                <li class="ml-3 text-[#212427]">We may modify or update these Terms at any time without prior notice.</li>
                                <li class="ml-3 text-[#212427]">We will notify you of any changes via email or by posting an updated version on our website.</li>
                            </p>
                            <h1 class="text-xl mt-5 font-bold text-[#212427]">Governing Law and Dispute Resolution: </h1>
                            <p class="mt-2">
                                <li class="ml-3 text-[#212427]">These Terms are governed by the laws of [Your Jurisdiction].</li>
                                <li class="ml-3 text-[#212427]"> Any disputes arising from these Terms will be resolved through arbitration or mediation.</li>
                            </p>
                        </div> ',
            'cookie' => '<h1 class="text-2xl font-black text-[#212427]">Cookie Policy</h1>
                        <p class="text-sm text-[#848484]">Last update: 20/06/2023</p>
                                    <p class="text-lg text-[#212427]">This Cookie Policy explains how FYH.com we uses cookies and similar tracking technologies when you visit our website. By using our website, you consent to the use of cookies as described in this Cookie Policy.
                        What are Cookies? Cookies are small text files that are placed on your device (computer, smartphone, or tablet) when you visit a website. They are widely used to make websites work or to enhance their functionality, as well as to provide information to website owners.</p>
                        <h1 class="text-xl font-black text-[#212427]">Types of Cookies We Use:</h1>
                        <p class="text-[#212427] text-justify mt-2">1. Essential Cookies: These cookies are necessary for the operation of our website and enable you to navigate and use its features. They do not gather any personal information.<br>
                        2. Analytics and Performance Cookies: These cookies help us understand how visitors interact with our website, allowing us to analyze and improve its performance. We use third-party analytics services that may set cookies on your device.<br>
                        3. Advertising and Targeting Cookies: These cookies are used to deliver relevant advertisements and marketing content based on your interests. They may also be used to limit the number of times you see an advertisement and measure the effectiveness of advertising campaigns.</p>
                        <h1 class="text-xl font-black text-[#212427]">Managing and Controlling Cookies:</h1>
                        <p class="text-[#212427] text-justify mt-2">You can manage your cookie preferences through the browser settings on your device. Most browsers allow you to block or delete cookies. However, please note that blocking or deleting certain cookies may affect the functionality of our website or limit your access to certain features.
                        For more information on how to manage and control cookies, you can refer to the help section of your browser or visit www.allaboutcookies.org.</p>
                        <h1 class="text-xl font-black text-[#212427]">Third-Party Cookies:</h1>
                        <p class="text-[#212427] text-justify mt-2">Our website may contain cookies from third-party services, such as social media platforms or advertising networks. These third parties may use cookies to collect information about your online activities over time and across different websites. We do not have control over these cookies, and their use is subject to the respective third party privacy policies.</p>
                        <h1 class="text-xl font-black text-[#212427]">Changes to this Cookie Policy:</h1>
                        <p class="text-[#212427] text-justify mt-2">We may update this Cookie Policy from time to time to reflect changes in our practices or legal requirements. We encourage you to review this page periodically for any updates.</p>
                        <h1 class="text-xl font-black text-[#212427]">Contacting Us</h1>
                        <p class="text-[#212427] text-justify mt-2">If you have any questions about this Privacy Policy, the practices of this Website, or your dealings with this Website, please contact us at<br>
                        FYH.com<br>
                        8890 RoadHill St., Suite 100<br>
                        Zurich, Switzerland-8000<br><br>

                        Email:info@fyh.com<br>
                        Tel: +1 54541 5545141</p>',

            'privacy' => '<h1 class="text-2xl font-black text-[#212427]">Privacy Policy</h1>
                        <p class="text-sm text-[#848484]">Last update: 20/06/2023</p>
                                    <p class="text-lg text-[#212427]">This Cookie Policy explains how FYH.com we uses cookies and similar tracking technologies when you visit our website. By using our website, you consent to the use of cookies as described in this Cookie Policy.
                        What are Cookies? Cookies are small text files that are placed on your device (computer, smartphone, or tablet) when you visit a website. They are widely used to make websites work or to enhance their functionality, as well as to provide information to website owners.</p>
                        <h1 class="text-xl font-black text-[#212427]">Types of Cookies We Use:</h1>
                        <p class="text-[#212427] text-justify mt-2">1. Essential Cookies: These cookies are necessary for the operation of our website and enable you to navigate and use its features. They do not gather any personal information.<br>
                        2. Analytics and Performance Cookies: These cookies help us understand how visitors interact with our website, allowing us to analyze and improve its performance. We use third-party analytics services that may set cookies on your device.<br>
                        3. Advertising and Targeting Cookies: These cookies are used to deliver relevant advertisements and marketing content based on your interests. They may also be used to limit the number of times you see an advertisement and measure the effectiveness of advertising campaigns.</p>
                        <h1 class="text-xl font-black text-[#212427]">Managing and Controlling Cookies:</h1>
                        <p class="text-[#212427] text-justify mt-2">You can manage your cookie preferences through the browser settings on your device. Most browsers allow you to block or delete cookies. However, please note that blocking or deleting certain cookies may affect the functionality of our website or limit your access to certain features.
                        For more information on how to manage and control cookies, you can refer to the help section of your browser or visit www.allaboutcookies.org.</p>
                        <h1 class="text-xl font-black text-[#212427]">Third-Party Cookies:</h1>
                        <p class="text-[#212427] text-justify mt-2">Our website may contain cookies from third-party services, such as social media platforms or advertising networks. These third parties may use cookies to collect information about your online activities over time and across different websites. We do not have control over these cookies, and their use is subject to the respective third party privacy policies.</p>
                        <h1 class="text-xl font-black text-[#212427]">Changes to this Cookie Policy:</h1>
                        <p class="text-[#212427] text-justify mt-2">We may update this Cookie Policy from time to time to reflect changes in our practices or legal requirements. We encourage you to review this page periodically for any updates.</p>
                        <h1 class="text-xl font-black text-[#212427]">Contacting Us</h1>
                        <p class="text-[#212427] text-justify mt-2">If you have any questions about this Privacy Policy, the practices of this Website, or your dealings with this Website, please contact us at<br>
                        FYH.com<br>
                        8890 RoadHill St., Suite 100<br>
                        Zurich, Switzerland-8000<br><br>

                        Email:info@fyh.com<br>
                        Tel: +1 54541 5545141</p>',

        ];
    }
}
