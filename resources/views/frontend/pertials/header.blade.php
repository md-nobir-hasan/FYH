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
     @yield('styles')

    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js','public/js/toastr.css'])
</head>
<body class="antialiased">
    <div class=" mt-12 lg:mx-40" style="font-family: 'Montserrat';">
        <div class="flex">
            <a href="{{route('home')}}"><img src="{{asset('/images/logo.jpg')}}" alt="" class="h-8 w-24"></a>
            <a href="{{route('member')}}">
                <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Membership</button>
            </a>
            <a href="{{route('community')}}">
                <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Community</button>
            </a>
            <a href="{{route('benefit')}}">
                <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Benefits</button>
            </a>



            <a href="{{route('discover')}}">
                <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Discover</button>
            </a>

            <a href="{{route('about')}}">
                <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">About</button>
            </a>
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);" type="button">
                       <div class="flex">
                        Guide <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                       </div>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                  <li>
                    <a href="{{route('guide.move_switzerland')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Move To Swizerland</a>
                  </li>
                  <li>
                    <a href="{{route('guide.intro.move_switzerland')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> Integration In SwiGerlan</a>
                  </li>
               
                </ul>
            </div>
            
            <a href="{{route('login')}}">
                <button class="ml-12 px-2 py-1 font-semibold text-white pl-5 pr-5 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Login</button>
            </a>


        </div>
</div>
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
@endpush
