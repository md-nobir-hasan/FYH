<div class="flex justify-center items-center"><img src="{{ asset('/images/footer.png') }}" alt=""
        class="mt-[400px] w-[900px] absolute"></div>
<footer class="bg-black text-white mt-60 dark:bg-gray-900">
    <div class="mx-auto w-full p-4 py-6 lg:py-8">
        <div class="md:flex mt-20 md:justify-between">
            <div class="mb-6 md:mb-0 lg:ml-36">
                <div class="flex">
                    <div>
                        <a href="/">
                            <img src="{{ asset('/images/fyhlogo.png') }}" alt="FYH" class="h-8 w-24">
                        </a>
                        <h1 class="font-bold text-[28px] mt-5">Newsletter Signup</h1>
                        <p class="font-semibold font-[16px] w-full">Subscribe our newsletter for hints, tips and the
                            latest product news.</p>
                    </div>
                    <a href="{{$setting->youtube ?? null}}"><svg width="34" height="25" viewBox="0 0 34 34"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16.6935" cy="16.6935" r="16.6935" fill="#D1052C" />
                            <g clip-path="url(#clip0_364_9092)">
                                <path
                                    d="M22.8289 9.18945H9.81626C7.2632 9.18945 5.19354 11.2591 5.19354 13.8122V20.3171C5.19354 22.8702 7.2632 24.9398 9.81626 24.9398H22.8289C25.3819 24.9398 27.4516 22.8702 27.4516 20.3171V13.8122C27.4516 11.2591 25.3819 9.18945 22.8289 9.18945ZM19.7026 17.3811L13.6161 20.284C13.454 20.3613 13.2666 20.2431 13.2666 20.0634V14.0763C13.2666 13.8941 13.4589 13.776 13.6214 13.8583L19.7078 16.9426C19.8888 17.0343 19.8857 17.2938 19.7026 17.3811Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_364_9092">
                                    <rect width="22.2581" height="22.2581" fill="white"
                                        transform="translate(5.19354 5.93555)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </a>
                    <a href="{{$setting->fb_page ?? null}}"><svg width="35" height="25" viewBox="0 0 35 34"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34.1936 16.6935C34.1936 25.026 28.0887 31.9323 20.1084 33.1843V21.519H23.9981L24.7382 16.6935H20.1084V13.5622C20.1084 12.2417 20.7552 10.9551 22.8289 10.9551H24.9339V6.84696C24.9339 6.84696 23.0232 6.52092 21.1967 6.52092C17.3839 6.52092 14.8916 8.83193 14.8916 13.0158V16.6935H10.653V21.519H14.8916V33.1843C6.91134 31.9323 0.806458 25.026 0.806458 16.6935C0.806458 7.47428 8.28073 0 17.5 0C26.7193 0 34.1936 7.47428 34.1936 16.6935Z"
                                fill="#D1052C" />
                            <path
                                d="M23.9981 21.5191L24.7382 16.6936H20.1084V13.5622C20.1084 12.2421 20.7551 10.9552 22.8288 10.9552H24.9339V6.84704C24.9339 6.84704 23.0235 6.521 21.197 6.521C17.3839 6.521 14.8916 8.83201 14.8916 13.0158V16.6936H10.653V21.5191H14.8916V33.1843C15.7416 33.3177 16.6126 33.3872 17.5 33.3872C18.3874 33.3872 19.2584 33.3177 20.1084 33.1843V21.5191H23.9981Z"
                                fill="white" />
                        </svg>

                    </a>
                    <a href="{{$setting->linkedin ?? null}}"><svg width="34" height="25" viewBox="0 0 34 34"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.3065 33.3866C26.5261 33.3866 34 25.9127 34 16.6931C34 7.47347 26.5261 -0.000488281 17.3065 -0.000488281C8.08687 -0.000488281 0.612915 7.47347 0.612915 16.6931C0.612915 25.9127 8.08687 33.3866 17.3065 33.3866Z"
                                fill="#D1052C" />
                            <path
                                d="M27.2807 18.0364V24.9188H23.2905V18.4977C23.2905 16.8854 22.7143 15.7844 21.2696 15.7844C20.1671 15.7844 19.5121 16.5256 19.2229 17.2434C19.1178 17.4999 19.0907 17.8561 19.0907 18.2159V24.9185H15.1002C15.1002 24.9185 15.1538 14.0432 15.1002 12.9175H19.091V14.6182C19.083 14.6315 19.0717 14.6446 19.0645 14.6574H19.091V14.6182C19.6213 13.8022 20.567 12.6357 22.6873 12.6357C25.3125 12.6357 27.2807 14.3509 27.2807 18.0364ZM10.9258 7.13257C9.56079 7.13257 8.66776 8.02858 8.66776 9.2058C8.66776 10.358 9.5349 11.2799 10.8734 11.2799H10.8993C12.2911 11.2799 13.1564 10.358 13.1564 9.2058C13.1299 8.02858 12.2911 7.13257 10.9258 7.13257ZM8.90492 24.9188H12.894V12.9175H8.90492V24.9188Z"
                                fill="#F1F2F2" />
                        </svg>


                    </a>
                </div>


                <form class="mt-10">
                    <label for="search" class="mb-2 text-sm font-medium sr-only "></label>
                    <div class="relative">

                        <input type="search" id="search"
                            class="block rounded-3xl w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="your email adress..." required>
                        <a href="#"
                            class="text-[#D1052C] absolute right-2.5 bottom-2.5 font-bold focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe<i
                                class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </form>

            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div class="ml-20">
                    <h2 class="mb-6 text-sm font-semibold  uppercase dark:text-white">Our Contacts</h2>
                    <ul class="font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline text-justify">FYH.com
                                8890 RoadHill St., Suite 100
                                Zurich, Switzerland-8000
                                <br /><br />
                                Email:info@fyh.com
                                Tel: +1 54541 5545141</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-20">
                    <h2 class="mb-6 text-sm font-semibold uppercase dark:text-white">Explore</h2>
                    <ul class=" dark:text-gray-400 font-medium">
                        <li>
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">About</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Our Team</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Gallery</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Pricing</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Events</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">News & Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase dark:text-white">Support</h2>
                    <ul class=" dark:text-gray-400 font-medium">
                        <li>
                            <a href="#" class="hover:underline">Help Center</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">My Account</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Ticket Support</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between mx-36">
            <span class="text-sm  sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Copyright © 2023 FYH, All rights reserved. Powered by Fozlay.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <h1>Terms of use</h1>

                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">

                    <span class="text-white">privacy Policy</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">

                    <span class="text-white">Cookie Policy</span>
                </a>
            </div>
        </div>
    </div>
</footer>
@push('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
@endpush
