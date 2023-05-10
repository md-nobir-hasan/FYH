
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @stack('title') - {{ config('app.name', 'FYH') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @vite(['resources/css/app.css','resources/js/app.js','public/js/toastr.css'])
</head>
<body class="antialiased">

    <div class=" mt-12 lg:mx-40" style="font-family: 'Montserrat';">
        <div class="flex">
            <a href="{{route('home')}}"><img src="{{asset('/images/logo.jpg')}}" alt="" class="h-8 w-24"></a>
            <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="{{route('member')}}">Membership</a></button>
            <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="{{route('community')}}">Community</a></button>
            <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Benifits</button>
            <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Guide</button>
            <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Discover</button>
            <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">About</button>
            <button class="ml-12 font-semibold text-white pl-5 pr-5 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="{{route('login')}}">Login</a></button>
        </div>
</div>
@push('js')

@endpush
