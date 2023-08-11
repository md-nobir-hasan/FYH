@auth
@php
    if(Schema::hasTable('wishlists')) {
        $wishlists = App\Models\Wishlist::with('user','story')->where('user_id',Auth::user()->id)->get();
    }
@endphp
@endauth

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @stack('title') - {{ $setting->title ?? 'FYH' }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @yield('styles')

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/js/toastr.css'])
</head>

<body class="antialiased" style="background:url(/images/Line.png);background-size:100%  ;background-repeat:no-repeat;">
    <div class="mt-12 2xl:flex lg:flex xl:flex md:block  hidden" style="font-family: 'Poppins';">
        <div class="flex justify-between lg:w-[1320px]  mx-auto">
            @auth
                <a href="{{ route('user.home') }}"><img src="{{ $setting->logo }}" alt=""
                        class="h-[50px] w-[150px]"></a>
            @endauth
            @guest
                <a href="{{ route('home') }}"><img src="{{ $setting->logo }}" alt=""
                        class="h-[50px] 2xl:w-[150px] xl:w-[150px] lg:w-[150px] md:w-[100px] ml-5"></a>
            @endguest

            <div class="flex">
                {{-- @dd(Auth::user()) --}}
                @auth

                    @php
                        $menus = $menus->where('client_type_id', Auth::user()->client_type_id);
                    @endphp
                    {{-- @dd(Auth::user()->client_type_id,$menus) --}}
                @else
                    @php
                        $menus = $menus->where('client_type_id', null);
                    @endphp
                @endauth

                @foreach ($menus as $menu)
                    @if (count($menu->submenus) < 1 && $menu->link_id != null)
                        <a href="{{ url($menu->link->url) }}">
                            <button
                                class="2xl:ml-[42px] hover:bg-[#FDF2F4] ml-5 font-[500] text-xl p-2 rounded {{ request()->is($menu->link->url) ? 'active' : '' }} "
                                style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">{{ $menu->name }}</button>
                        </a>
                    @else
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="ml-[42px] text-xl p-2 rounded {{ request()->is('guide*') ? 'active' : '' }}"
                            style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);" type="button">
                            <div class="flex justify-center items-center">
                                {{ $menu->name }}
                                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-48 ">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                                @foreach ($menu->submenus as $submenu)
                                    <li>
                                        <a href="{{ url($submenu->link->url) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 ">
                                            {{ $submenu->name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    @endif
                @endforeach

                {{-- @if (auth()->user() == null)
                    <a href="{{ route('member') }}" class="">
                        <button
                            class="font-[500] text-[20px] p-2 rounded {{ request()->is('membership') ? 'active' : '' }} "
                            style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Membership</button>
                    </a>
                @endif

                @auth
                    <a href="{{ route('share.story') }}">
                        <button
                            class=" font-semibold p-2 rounded {{ request()->is('share-story') ? 'active' : '' }}"
                            style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">ShareStory</button>
                    </a>
                @endauth
                <a href="{{ route('community') }}">
                    <button class=" font-[500] text-[20px] p-2 rounded {{ request()->is('community') ? 'active' : '' }}"
                        style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Community</button>
                </a>

                <a href="{{ route('benefit') }}">
                    <button class=" font-[500] text-xl p-2 rounded {{ request()->is('benefits') ? 'active' : '' }}"
                        style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Benefits</button>
                </a>

                <a href="{{ route('about') }}">
                    <button class=" font-[500] p-2 text-xl rounded {{ request()->is('about') ? 'active' : '' }}"
                        style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">About</button>
                </a>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class=" font-[500]  text-[20px] rounded {{ request()->is('guide*') ? 'active' : '' }}"
                    style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);" type="button">
                    <div class="hover:bg-[#FDF2F4]">
                        Guide <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('guide.survival') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">Survival
                                Guide</a>
                        </li>
                        <li>
                            <a href="{{ route('guide.move_switzerland') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">Move
                                To Swizerland</a>
                        </li>
                        <li>
                            <a href="{{ route('guide.intro.move_switzerland') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">
                                Integration In SwiGerlan</a>
                        </li>

                    </ul>
                </div>
--}}
                @if (auth()->user() == null)
                    <a href="{{ route('login') }}" class="flex justify-center items-center">

                        <button
                            class="md:w-[60px] 2xl:w-[127px] xl:w-[127px] lg:w-[127px] h-[38px] 2xl:ml-[42px] lg:ml-[42px] xl:ml-[42px] md:ml-[10px] mr-5 font-semibold p-1 text-xl text-white rounded"
                            style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Login</button>

                    </a>
                @endif
                @auth
                    <!-- love icon svg -->
                    <button type="button" class="flex mr-3 text-sm  md:mr-0 " id="user-menu-button" aria-expanded="false"
                        data-dropdown-toggle="user-dropdowns" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <svg class="mt-3 ml-5" width="26" height="24" viewBox="0 0 26 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13 23.25L11.1875 21.625C9.08333 19.7292 7.34375 18.0938 5.96875 16.7188C4.59375 15.3438 3.5 14.1094 2.6875 13.0156C1.875 11.9219 1.30729 10.9167 0.984375 10C0.661458 9.08333 0.5 8.14583 0.5 7.1875C0.5 5.22917 1.15625 3.59375 2.46875 2.28125C3.78125 0.96875 5.41667 0.3125 7.375 0.3125C8.45833 0.3125 9.48958 0.541667 10.4688 1C11.4479 1.45833 12.2917 2.10417 13 2.9375C13.7083 2.10417 14.5521 1.45833 15.5313 1C16.5104 0.541667 17.5417 0.3125 18.625 0.3125C20.5833 0.3125 22.2188 0.96875 23.5313 2.28125C24.8438 3.59375 25.5 5.22917 25.5 7.1875C25.5 8.14583 25.3385 9.08333 25.0156 10C24.6927 10.9167 24.125 11.9219 23.3125 13.0156C22.5 14.1094 21.4062 15.3438 20.0312 16.7188C18.6562 18.0938 16.9167 19.7292 14.8125 21.625L13 23.25ZM13 19.875C15 18.0833 16.6458 16.5469 17.9375 15.2656C19.2292 13.9844 20.25 12.8698 21 11.9219C21.75 10.974 22.2708 10.1302 22.5625 9.39062C22.8542 8.65104 23 7.91667 23 7.1875C23 5.9375 22.5833 4.89583 21.75 4.0625C20.9167 3.22917 19.875 2.8125 18.625 2.8125C17.6458 2.8125 16.7396 3.08854 15.9062 3.64063C15.0729 4.19271 14.5 4.89583 14.1875 5.75H11.8125C11.5 4.89583 10.9271 4.19271 10.0938 3.64063C9.26042 3.08854 8.35417 2.8125 7.375 2.8125C6.125 2.8125 5.08333 3.22917 4.25 4.0625C3.41667 4.89583 3 5.9375 3 7.1875C3 7.91667 3.14583 8.65104 3.4375 9.39062C3.72917 10.1302 4.25 10.974 5 11.9219C5.75 12.8698 6.77083 13.9844 8.0625 15.2656C9.35417 16.5469 11 18.0833 13 19.875Z"
                                fill="#1C1B1F" />
                        </svg>
                    </button>
                    <!-- dropdown menu -->
                    <div class="z-50 lg:w-80 hidden my-4 text-base list-none bg-white rounded-lg shadow"
                        id="user-dropdowns">
                        <div class="py-[20px] px-[20px]" id="wishlist_div">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22"
                                    fill="none">
                                    <path
                                        d="M7.9991 17.629C-0.000897884 10.429 -0.000897825 4.96235 0.999102 3.12902C5.79838 -2.47094 9.9994 1.46237 11.5 4.12902C13.5 1.96235 18.4 -1.27098 22 3.12902C25.6 7.52902 16.5 17.2957 11.5 21.629C11.5 21.2957 10.7998 20.029 7.9991 17.629Z"
                                        fill="#D1052C" />
                                </svg>
                                <h1 class="ml-[10px] leading-normal">Favourites</h1>
                            </div>
                            @foreach ($wishlists as $wishlist)
                                <div class="mt-[10px]  border wld{{$wishlist->story->id}}" style="box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.08);">
                                    <a href="{{route('single-story', $wishlist->story->id)}}">
                                        <div class="py-[10px] pl-[20px] flex">
                                            <img src="/storage/{{$wishlist->story->image}}" width="65px"/>
                                            <h1 class="text-[12px] mt-[7px] font-normal leading-normal ml-[10px]">{{Str::limit($wishlist->story->title,57)}}</h1>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <!-- love icon svg end -->
                    <!-- notification svg -->
                    <button type="button" class="flex mr-3 text-sm  md:mr-0 " id="user-menu-button" aria-expanded="false"
                        data-dropdown-toggle="user-dropdownn" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <svg class="mt-3 ml-5" width="20" height="26" viewBox="0 0 20 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 21.75V19.25H2.5V10.5C2.5 8.77083 3.02083 7.23438 4.0625 5.89062C5.10417 4.54688 6.45833 3.66667 8.125 3.25V0.5H11.875V3.25C13.5417 3.66667 14.8958 4.54688 15.9375 5.89062C16.9792 7.23438 17.5 8.77083 17.5 10.5V19.25H20V21.75H0ZM10 25.5C9.3125 25.5 8.72396 25.2552 8.23438 24.7656C7.74479 24.276 7.5 23.6875 7.5 23H12.5C12.5 23.6875 12.2552 24.276 11.7656 24.7656C11.276 25.2552 10.6875 25.5 10 25.5ZM5 19.25H15V10.5C15 9.125 14.5104 7.94792 13.5312 6.96875C12.5521 5.98958 11.375 5.5 10 5.5C8.625 5.5 7.44792 5.98958 6.46875 6.96875C5.48958 7.94792 5 9.125 5 10.5V19.25Z"
                                fill="#1C1B1F" />
                        </svg>
                    </button>
                    <div class="z-50 lg:w-80 hidden my-4 text-base list-none bg-white rounded-lg shadow"
                        id="user-dropdownn">
                        <div class="py-[20px] px-[20px]">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31"
                                    viewBox="0 0 30 31" fill="none">
                                    <mask id="mask0_2891_19529" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="30" height="31">
                                        <rect y="0.174805" width="30" height="30" fill="#D1052C" />
                                    </mask>
                                    <g mask="url(#mask0_2891_19529)">
                                        <path
                                            d="M5 24.4248V21.9248H7.5V13.1748C7.5 11.4456 8.02083 9.90918 9.0625 8.56543C10.1042 7.22168 11.4583 6.34147 13.125 5.9248V3.1748H16.875V5.9248C18.5417 6.34147 19.8958 7.22168 20.9375 8.56543C21.9792 9.90918 22.5 11.4456 22.5 13.1748V21.9248H25V24.4248H5ZM15 28.1748C14.3125 28.1748 13.724 27.93 13.2344 27.4404C12.7448 26.9508 12.5 26.3623 12.5 25.6748H17.5C17.5 26.3623 17.2552 26.9508 16.7656 27.4404C16.276 27.93 15.6875 28.1748 15 28.1748ZM10 21.9248H20V13.1748C20 11.7998 19.5104 10.6227 18.5312 9.64355C17.5521 8.66439 16.375 8.1748 15 8.1748C13.625 8.1748 12.4479 8.66439 11.4688 9.64355C10.4896 10.6227 10 11.7998 10 13.1748V21.9248Z"
                                            fill="#D1052C" />
                                        <path
                                            d="M21.5019 23.5466H8.50189C8.16855 20.5466 7.80189 13.9466 9.00189 11.5466C10.5019 8.5466 10.5019 8.04662 15.0019 7.04662C18.6019 6.24662 20.8352 9.71328 21.5019 11.5466V23.5466Z"
                                            fill="#D1052C" />
                                    </g>
                                </svg>
                                </svg>
                                <h1 class="ml-[10px] mt-[5px] leading-normal">Notifications</h1>
                            </div>
                            <div class="mt-[10px]  border" style="box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.08);">
                                <div class="py-[10px] pl-[20px] flex">
                                    <div class="flex justify-center items-center"><svg width="15" height="16"
                                            viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.783203" width="15" height="15" rx="7.5"
                                                fill="#212427" />
                                        </svg></div>

                                    <div>
                                        <h1 class="text-[12px] mt-[7px] font-bold leading-normal ml-[10px]">Here’s a unread
                                            notification about your ...</h1>
                                        <h1 class="ml-[10px] text-[10px] text-[#848484]">Sun April 23,2023</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-[10px]  border" style="box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.08);">
                                <div class="py-[10px] pl-[20px] flex">
                                    <div class="flex justify-center items-center"><svg width="15" height="16"
                                            viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.783203" width="15" height="15" rx="7.5"
                                                fill="#212427" />
                                        </svg></div>

                                    <div>
                                        <h1 class="text-[12px] mt-[7px] font-bold leading-normal ml-[10px]">Here’s a unread
                                            notification about your ...</h1>
                                        <h1 class="ml-[10px] text-[10px] text-[#848484]">Sun April 23,2023</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-[10px]  border" style="box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.08);">
                                <div class="py-[10px] pl-[20px] flex">
                                    <div class="flex justify-center items-center"><svg width="15" height="16"
                                            viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.216797" width="15" height="15" rx="7.5"
                                                fill="#848484" />
                                        </svg>
                                    </div>

                                    <div>
                                        <h1 class="text-[12px] mt-[7px] font-normal leading-normal ml-[10px]">Here’s a
                                            unread notification about your ...</h1>
                                        <h1 class="ml-[10px] text-[10px] text-[#848484]">Sun April 23,2023</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- notification svg end -->

                    <div class="flex items-center ml-8 md:order-2">
                        <button type="button"
                            class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-2 focus:ring-[#D1052C] "
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-11 h-11 border border-[#D1052C] rounded-full "
                                src="{{ auth()->user()->img ?? asset('storage/default/human.webp') }}">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 lg:w-80 hidden my-4 text-base list-none bg-white rounded-lg shadow"
                            id="user-dropdown">
                            <div class="flex pt-[25px] pl-[25px]">
                                <img src="{{ auth()->user()->img ?? asset('storage/default/human.webp') }}"
                                    class="w-[58px] h-[58px] border p-0.5 rounded-full border-[#D1052C]" />
                                <span class="flex justify-center items-center ml-2 text-[20px] font-semibold  capitalize">
                                    {{ auth()->user()->fname }} </span>
                            </div>
                            <hr class="h-px bg-black mt-[20px] mx-4 border-0">
                            <ul class="py-1" aria-labelledby="user-menu-button">

                                <li class="mb-[5px]">
                                    <a href="{{ route('user.profile') }}"
                                        class="{{ request()->is('user/profile') ? 'tgactive' : '' }} block text-[14px] ml-[20px] leading-normal font-medium hover:text-black hover:bg-gray-100">Profile</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('share.story') }}"
                                        class="{{ request()->is('share-story') ? 'tgactive' : '' }} block leading-normal ml-[20px] text-[14px] hover:text-black font-medium hover:bg-gray-100">Edit
                                        Story</a>
                                </li>
                                <hr class="h-px bg-black mx-4 border-0">
                                <li
                                    class="flex  ml-[20px] {{ request()->is('my-story') ? 'tgactive' : '' }} hover:bg-gray-100 hover:text-black mt-1">

                                    <svg class="mt-[13px] " xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="12" viewBox="0 0 12 12" fill="none">
                                        <path
                                            d="M0.753906 11.9216V1.42155H4.37057C4.50668 1.07155 4.72057 0.789605 5.01224 0.575716C5.30391 0.361827 5.63446 0.254883 6.00391 0.254883C6.37335 0.254883 6.70391 0.361827 6.99557 0.575716C7.28724 0.789605 7.50113 1.07155 7.63724 1.42155H11.2539V11.9216H0.753906ZM6.00391 2.15072C6.13029 2.15072 6.23481 2.1094 6.31745 2.02676C6.40009 1.94412 6.44141 1.83961 6.44141 1.71322C6.44141 1.58683 6.40009 1.48231 6.31745 1.39967C6.23481 1.31704 6.13029 1.27572 6.00391 1.27572C5.87752 1.27572 5.773 1.31704 5.69036 1.39967C5.60773 1.48231 5.56641 1.58683 5.56641 1.71322C5.56641 1.83961 5.60773 1.94412 5.69036 2.02676C5.773 2.1094 5.87752 2.15072 6.00391 2.15072ZM1.92057 10.0841C2.44557 9.56877 3.05564 9.16287 3.75078 8.86634C4.44592 8.56981 5.19696 8.42155 6.00391 8.42155C6.81085 8.42155 7.56189 8.56981 8.25703 8.86634C8.95217 9.16287 9.56224 9.56877 10.0872 10.0841V2.58822H1.92057V10.0841ZM6.00391 7.25488C6.56779 7.25488 7.04905 7.05558 7.44766 6.65697C7.84627 6.25836 8.04557 5.77711 8.04557 5.21322C8.04557 4.64933 7.84627 4.16808 7.44766 3.76947C7.04905 3.37086 6.56779 3.17155 6.00391 3.17155C5.44002 3.17155 4.95877 3.37086 4.56016 3.76947C4.16155 4.16808 3.96224 4.64933 3.96224 5.21322C3.96224 5.77711 4.16155 6.25836 4.56016 6.65697C4.95877 7.05558 5.44002 7.25488 6.00391 7.25488ZM3.08724 10.7549H8.92057V10.609C8.51224 10.2688 8.06016 10.0136 7.56432 9.84342C7.06849 9.67329 6.54835 9.58822 6.00391 9.58822C5.45946 9.58822 4.93932 9.67329 4.44349 9.84342C3.94766 10.0136 3.49557 10.2688 3.08724 10.609V10.7549ZM6.00391 6.08822C5.76085 6.08822 5.55425 6.00315 5.38411 5.83301C5.21398 5.66287 5.12891 5.45627 5.12891 5.21322C5.12891 4.97016 5.21398 4.76356 5.38411 4.59342C5.55425 4.42329 5.76085 4.33822 6.00391 4.33822C6.24696 4.33822 6.45356 4.42329 6.6237 4.59342C6.79384 4.76356 6.87891 4.97016 6.87891 5.21322C6.87891 5.45627 6.79384 5.66287 6.6237 5.83301C6.45356 6.00315 6.24696 6.08822 6.00391 6.08822Z"
                                            fill="#212427" />
                                    </svg>
                                    <a href="{{ route('user.myStroy') }}"
                                        class="block leading-normal px-2  text-[14px] mt-[10px] font-medium ">My
                                        Story</a>
                                </li>
                                <li
                                    class="flex ml-[20px] {{ request()->is('membership') ? 'tgactive' : '' }} hover:text-black hover:bg-gray-100">
                                    <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="12" height="13"
                                        viewBox="0 0 12 13" fill="none">
                                        <path
                                            d="M1.33659 8.4222H10.6699V7.25553H1.33659V8.4222ZM3.66992 12.5055V9.58887H0.169922V0.838867H11.8366V9.58887H8.33659V12.5055L6.00326 11.3389L3.66992 12.5055ZM1.33659 5.50553H10.6699V2.00553H1.33659V5.50553Z"
                                            fill="#212427" />
                                    </svg>
                                    <a href="{{ route('member') }}"
                                        class="block text-[14px] mt-1 px-2 leading-normal font-medium ">Membership
                                        Update</a>
                                </li>
                                <li
                                    class="flex ml-[20px] {{ request()->is('help/support') ? 'tgactive' : '' }} hover:text-black hover:bg-gray-100">
                                    <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="12" height="13"
                                        viewBox="0 0 12 13" fill="none">
                                        <path
                                            d="M5.97604 10.1712C6.18021 10.1712 6.35278 10.1007 6.49375 9.95977C6.63472 9.81879 6.70521 9.64622 6.70521 9.44206C6.70521 9.23789 6.63472 9.06532 6.49375 8.92435C6.35278 8.78338 6.18021 8.71289 5.97604 8.71289C5.77187 8.71289 5.59931 8.78338 5.45833 8.92435C5.31736 9.06532 5.24687 9.23789 5.24687 9.44206C5.24687 9.64622 5.31736 9.81879 5.45833 9.95977C5.59931 10.1007 5.77187 10.1712 5.97604 10.1712ZM5.45104 7.92539H6.53021C6.53021 7.60456 6.56667 7.35178 6.63958 7.16706C6.7125 6.98234 6.9191 6.72956 7.25938 6.40872C7.51215 6.15595 7.71146 5.91532 7.85729 5.68685C8.00312 5.45838 8.07604 5.18372 8.07604 4.86289C8.07604 4.31845 7.87674 3.90039 7.47813 3.60872C7.07951 3.31706 6.60799 3.17122 6.06354 3.17122C5.50938 3.17122 5.05972 3.31706 4.71458 3.60872C4.36944 3.90039 4.12882 4.25039 3.99271 4.65872L4.95521 5.03789C5.00382 4.86289 5.11319 4.67331 5.28333 4.46914C5.45347 4.26497 5.71354 4.16289 6.06354 4.16289C6.37465 4.16289 6.60799 4.24796 6.76354 4.4181C6.9191 4.58824 6.99687 4.77539 6.99687 4.97956C6.99687 5.174 6.93854 5.35629 6.82188 5.52643C6.70521 5.69657 6.55938 5.85456 6.38438 6.00039C5.9566 6.37956 5.6941 6.66636 5.59687 6.86081C5.49965 7.05525 5.45104 7.41011 5.45104 7.92539ZM6.00521 12.5046C5.19826 12.5046 4.43993 12.3514 3.73021 12.0452C3.02049 11.7389 2.40312 11.3233 1.87812 10.7983C1.35312 10.2733 0.9375 9.65595 0.63125 8.94622C0.325 8.2365 0.171875 7.47817 0.171875 6.67122C0.171875 5.86428 0.325 5.10595 0.63125 4.39622C0.9375 3.6865 1.35312 3.06914 1.87812 2.54414C2.40312 2.01914 3.02049 1.60352 3.73021 1.29727C4.43993 0.991016 5.19826 0.837891 6.00521 0.837891C6.81215 0.837891 7.57049 0.991016 8.28021 1.29727C8.98993 1.60352 9.60729 2.01914 10.1323 2.54414C10.6573 3.06914 11.0729 3.6865 11.3792 4.39622C11.6854 5.10595 11.8385 5.86428 11.8385 6.67122C11.8385 7.47817 11.6854 8.2365 11.3792 8.94622C11.0729 9.65595 10.6573 10.2733 10.1323 10.7983C9.60729 11.3233 8.98993 11.7389 8.28021 12.0452C7.57049 12.3514 6.81215 12.5046 6.00521 12.5046ZM6.00521 11.3379C7.30799 11.3379 8.41146 10.8858 9.31563 9.98164C10.2198 9.07747 10.6719 7.974 10.6719 6.67122C10.6719 5.36845 10.2198 4.26497 9.31563 3.36081C8.41146 2.45664 7.30799 2.00456 6.00521 2.00456C4.70243 2.00456 3.59896 2.45664 2.69479 3.36081C1.79063 4.26497 1.33854 5.36845 1.33854 6.67122C1.33854 7.974 1.79063 9.07747 2.69479 9.98164C3.59896 10.8858 4.70243 11.3379 6.00521 11.3379Z"
                                            fill="#212427" />
                                    </svg>
                                    <a href="{{ route('help.support') }}"
                                        class="block leading-normal mt-1 px-2 text-[14px] font-medium ">Help &
                                        Support</a>
                                </li>
                                <li class="flex ml-[20px]">
                                    <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="12" height="11"
                                        viewBox="0 0 12 11" fill="none">
                                        <path
                                            d="M8.33724 8.58854L7.53516 7.74271L9.02266 6.25521H4.25391V5.08854H9.02266L7.53516 3.60104L8.33724 2.75521L11.2539 5.67188L8.33724 8.58854ZM0.753906 10.9219V0.421875H6.00391V1.58854H1.92057V9.75521H6.00391V10.9219H0.753906Z"
                                            fill="#212427" />
                                    </svg>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="block px-2 mt-1 font-medium text-black text-[14px] leading-normal hover:bg-gray-100">Sign
                                            out</a>
                                    </form>
                                </li>
                            </ul>
                            <hr class="h-px bg-black mx-4 mt-[10px] border-0">
                            <div class="flex justify-center mt-1 items-center">
                                <h1 class="text-[12px] text-[#212427] font-normal mb-[20px]"> <a
                                        href="{{ route('terms.condition') }}">Terms & Condition</a></h1>
                                <p class="ml-[20px] mb-[20px] text-[12px] text-[#212427] font-normal"> <a
                                        href="{{ route('cookies') }}">Cookie Policy</a> </p>
                            </div>
                        </div>
                    </div>

                @endauth
            </div>

        </div>
    </div>
    <nav class="bg-white border-gray-200 ">
        <div class="2xl:hidden md:hidden lg:hidden flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">

                <img src="/images/fyhlogo.png" class="w-20 h-7" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto " id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                    @if (auth()->user() == null)
                        <li>
                            <a href="{{ route('member') }}"
                                class="block py-2 pl-3 pr-4 text-black hover:hover:bg-[#D1052C] hover:text-white rounded md:bg-transparent md:text-blue-700 md:p-0  {{ request()->is('membership') ? 'active' : '' }} "
                                aria-current="page">Membership</a>
                        </li>
                    @endif
                    @auth
                        <li>
                            <a href="{{ route('share.story') }}"
                                class="block py-2 pl-3 pr-4 text-black rounded hover:hover:bg-[#D1052C] hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('share-story') ? 'active' : '' }}">Share
                                Story</a>
                        </li>
                    @endauth
                    <li>
                        <a href="{{ route('community') }}"
                            class="block py-2 pl-3 pr-4 text-black rounded hover:hover:bg-[#D1052C] hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('community') ? 'active' : '' }}">Community</a>
                    </li>
                    <li>
                        <a href="{{ route('benefit') }}"
                            class="block py-2 pl-3 pr-4 text-black rounded hover:hover:bg-[#D1052C] hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('benefits') ? 'active' : '' }}">Benifits</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 pl-3 pr-4 text-black rounded hover:hover:bg-[#D1052C] hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 {{ request()->is('about') ? 'active' : '' }}">About</a>
                    </li>
                    <div class="relative" data-te-dropdown-ref>
                        <button
                            class="block py-2 pl-3 pr-4 text-black rounded hover:hover:bg-[#D1052C] hover:text-white md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  {{ request()->is('guide*') ? 'active' : '' }} flex mt-3"
                            type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref aria-expanded="false"
                            data-te-ripple-init data-te-ripple-color="light">
                            Guide
                            <span class="ml-2 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg  [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 "
                                    href="{{ route('guide.survival') }}" data-te-dropdown-item-ref>Survival Guide</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 "
                                    href="{{ route('guide.move_switzerland') }}" data-te-dropdown-item-ref>Move To
                                    Switzerland</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 "
                                    href="{{ route('guide.intro.move_switzerland') }}"
                                    data-te-dropdown-item-ref>Integration In Switzerland</a>
                            </li>
                        </ul>
                    </div>
                </ul>
                @if (auth()->user() == null)
                    <a href="{{ route('login') }}" class="flex justify-center items-center">

                        <button class=" w-[127px] h-[38px] ml-[42px] mr-5 font-semibold p-1 text-xl text-white rounded"
                            style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Login</button>

                    </a>
                @endif
                @auth
                    <!-- love icon svg -->
                    <div class="flex justify-between">
                        <svg class="mt-3 ml-5" width="26" height="24" viewBox="0 0 26 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13 23.25L11.1875 21.625C9.08333 19.7292 7.34375 18.0938 5.96875 16.7188C4.59375 15.3438 3.5 14.1094 2.6875 13.0156C1.875 11.9219 1.30729 10.9167 0.984375 10C0.661458 9.08333 0.5 8.14583 0.5 7.1875C0.5 5.22917 1.15625 3.59375 2.46875 2.28125C3.78125 0.96875 5.41667 0.3125 7.375 0.3125C8.45833 0.3125 9.48958 0.541667 10.4688 1C11.4479 1.45833 12.2917 2.10417 13 2.9375C13.7083 2.10417 14.5521 1.45833 15.5313 1C16.5104 0.541667 17.5417 0.3125 18.625 0.3125C20.5833 0.3125 22.2188 0.96875 23.5313 2.28125C24.8438 3.59375 25.5 5.22917 25.5 7.1875C25.5 8.14583 25.3385 9.08333 25.0156 10C24.6927 10.9167 24.125 11.9219 23.3125 13.0156C22.5 14.1094 21.4062 15.3438 20.0312 16.7188C18.6562 18.0938 16.9167 19.7292 14.8125 21.625L13 23.25ZM13 19.875C15 18.0833 16.6458 16.5469 17.9375 15.2656C19.2292 13.9844 20.25 12.8698 21 11.9219C21.75 10.974 22.2708 10.1302 22.5625 9.39062C22.8542 8.65104 23 7.91667 23 7.1875C23 5.9375 22.5833 4.89583 21.75 4.0625C20.9167 3.22917 19.875 2.8125 18.625 2.8125C17.6458 2.8125 16.7396 3.08854 15.9062 3.64063C15.0729 4.19271 14.5 4.89583 14.1875 5.75H11.8125C11.5 4.89583 10.9271 4.19271 10.0938 3.64063C9.26042 3.08854 8.35417 2.8125 7.375 2.8125C6.125 2.8125 5.08333 3.22917 4.25 4.0625C3.41667 4.89583 3 5.9375 3 7.1875C3 7.91667 3.14583 8.65104 3.4375 9.39062C3.72917 10.1302 4.25 10.974 5 11.9219C5.75 12.8698 6.77083 13.9844 8.0625 15.2656C9.35417 16.5469 11 18.0833 13 19.875Z"
                                fill="#1C1B1F" />
                        </svg>
                        <!-- love icon svg end -->
                        <!-- notification svg -->
                        <svg class="mt-3 ml-5" width="20" height="26" viewBox="0 0 20 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 21.75V19.25H2.5V10.5C2.5 8.77083 3.02083 7.23438 4.0625 5.89062C5.10417 4.54688 6.45833 3.66667 8.125 3.25V0.5H11.875V3.25C13.5417 3.66667 14.8958 4.54688 15.9375 5.89062C16.9792 7.23438 17.5 8.77083 17.5 10.5V19.25H20V21.75H0ZM10 25.5C9.3125 25.5 8.72396 25.2552 8.23438 24.7656C7.74479 24.276 7.5 23.6875 7.5 23H12.5C12.5 23.6875 12.2552 24.276 11.7656 24.7656C11.276 25.2552 10.6875 25.5 10 25.5ZM5 19.25H15V10.5C15 9.125 14.5104 7.94792 13.5312 6.96875C12.5521 5.98958 11.375 5.5 10 5.5C8.625 5.5 7.44792 5.98958 6.46875 6.96875C5.48958 7.94792 5 9.125 5 10.5V19.25Z"
                                fill="#1C1B1F" />
                        </svg>

                        <!-- notification svg end -->

                        <div class="flex items-center ml-8 md:order-2">
                            <button type="button"
                                class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-2 focus:ring-[#D1052C] "
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdowns"
                                data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-11 h-11 border border-[#D1052C] rounded-full "
                                    src="{{ auth()->user()->img ?? asset('storage/default/human.webp') }}">
                            </button>
                            <!-- Dropdown menu -->
                            <div class="z-50 lg:w-80 hidden my-4 text-base list-none bg-white rounded-lg shadow"
                                id="user-dropdowns">
                                <div class="flex p-5">
                                    <img src="{{ auth()->user()->img ?? asset('storage/default/human.webp') }}"
                                        class="w-11 h-11 border p-0.5 rounded-full border-[#D1052C]" />
                                    <span
                                        class="flex justify-center items-center ml-2 text-lg text-black font-semibold  capitalize">
                                        {{ auth()->user()->fname }} </span>
                                </div>
                                <hr class="h-px bg-black mx-4 border-0">
                                <ul class="py-1" aria-labelledby="user-menu-button">

                                    <li class="mb-1">
                                        <a href="{{ route('user.profile') }}"
                                            class="{{ request()->is('user/profile') ? 'tgactive' : '' }} block text-lg px-4  font-medium hover:text-black hover:bg-gray-100">Profile</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="{{ route('share.story') }}"
                                            class="{{ request()->is('share-story') ? 'tgactive' : '' }} block text-lg px-4  hover:text-black font-medium hover:bg-gray-100">Edit
                                            Profile</a>
                                    </li>
                                    <hr class="h-px bg-black mx-4 border-0">
                                    <li
                                        class="flex  ml-4 {{ request()->is('my-story') ? 'tgactive' : '' }} hover:bg-gray-100 hover:text-black mt-1">

                                        <img src="/images/profileLogo.png" class="h-2 flex w-3 mt-3" />
                                        <a href="{{ route('user.myStroy') }}"
                                            class="block text-lg px-2   font-medium ">My
                                            Story</a>
                                    </li>
                                    <li
                                        class="flex ml-4 {{ request()->is('membership') ? 'tgactive' : '' }} hover:text-black hover:bg-gray-100">
                                        <img src="/images/profileLogo2.png" class="h-3 flex w-3 mt-2" />
                                        <a href="{{ route('member') }}"
                                            class="block text-lg px-2 font-medium ">Membership
                                            Update</a>
                                    </li>
                                    <li
                                        class="flex ml-4 {{ request()->is('help/support') ? 'tgactive' : '' }} hover:text-black hover:bg-gray-100">
                                        <img src="/images/profileLogo3.png" class="h-2 flex w-3 mt-3" />
                                        <a href="{{ route('help.support') }}"
                                            class="block text-lg px-2  font-medium ">Help &
                                            Support</a>
                                    </li>
                                    <li class="flex ml-4">
                                        <img src="/images/logout.png" class="h-3 flex w-3 mt-3" />
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="block text-lg px-2 pt-2 font-medium text-black hover:bg-gray-100">Sign
                                                out</a>
                                        </form>
                                    </li>
                                </ul>
                                <hr class="h-px bg-black mx-4 border-0">
                                <div class="flex justify-center items-center">
                                    <h1 class=""> <a href="{{ route('terms.condition') }}">Terms & Condition</a>
                                    </h1>
                                    <p class="ml-3"> <a href="{{ route('cookies') }}">Cookie</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endauth
            </div>



        </div>

    </nav>
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    @endpush
