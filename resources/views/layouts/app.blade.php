<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @isset($title) {{$title}} - @endisset{{ config('app.name', 'FYH') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/js/app.js','public/js/toastr.css'])
        @if (isset($style))
                {{$style}}
        @endif
        <style>
            body{
                background-color: #80808042;
            }
            #toast-container{
                top: 50px;
            }
        </style>

    </head>
    {{-- <body class="font-sans antialiased"> --}}
        <body class="dark:bg-zinc-800">
            <!--Main Navigation-->
            <header>
              <!-- Sidenav -->
                <x-sidenav></x-sidenav>
              <!-- End Sidenav -->

              <!-- Navbar -->
              <x-navbar></x-navbar>
              <!-- Navbar -->
            </header>
            <!--Main Navigation-->

            <!--Main layout-->
            <main class="md:pl-[250px] pt-[85px]">
                @isset($header)
                    <div class="pl-8 text-center">
                        {{$header}}
                    </div>
                @endisset


            <!-- Page Content -->
            {{-- <main> --}}
                {{ $slot }}
            {{-- </main> --}}

            </main>
            <!--Main layout-->

            <!--Footer-->

                <x-footer></x-footer>
            <!--Footer-->
            @isset ($js)
                {{$js}}
            @endisset
    </body>
</html>
