<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('frontend.pertials.header')

        @yield('content')

    @include('frontend.pertials.footer')
    @stack('js')
</body>
</html>
