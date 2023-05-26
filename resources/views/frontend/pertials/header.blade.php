<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @stack('title') - {{ $setting->title ?? 'FYH' }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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
            
            <a href="{{route('login')}}">
                <button class="ml-12 font-semibold text-white pl-5 pr-5 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="{{route('login')}}">Login</a></button>
            </a>


        </div>
</div>
@push('js')

@endpush
