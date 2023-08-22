@php
    $sidenav = [
        ['title' => 'nobir', 'name' => 'dashboard', 'route_name' => 'dashboard', 'children' => ''],
        [
            'title' => 'Setup',
            'name' => 'setup',
            'route_name' => 'setup',
            'children' => [['title' => 'Link', 'name' => 'link', 'route_name' => 'admin.setup.link.index'], ['title' => 'Membership Type', 'name' => 'membership_type', 'route_name' => 'admin.setup.client-type.index'], ['title' => 'Payment Duration', 'name' => 'payment_duration', 'route_name' => 'admin.setup.payment_duration.index'], ['title' => 'Videos', 'name' => 'video', 'route_name' => 'admin.setup.video.index']],
@endphp

<!-- Sidenav -->
<nav id="sidenav1"
    class="fixed top-0 max-md:top-[66px] left-0 z-[1035]  h-screen w-65 max-md:hidden overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800"
    data-te-sidenav-init>
    <a class="mb-3 flex items-center justify-center py-4 outline-none max-md:hidden" href="{{ route('home') }}"
        target="_blank" data-te-ripple-init data-te-ripple-color="primary">
        <x-application-logo></x-application-logo>
    </a>

    <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
        <x-menu/>
        {{-- @if ($n = check('Home'))
            <li class="relative">
                <a class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]  outline-none
                transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600
                focus:outline-none @if (Request::is('dashboard')) bg-blue-400/10 text-blue-600 @else text-gray-700 @endif active:bg-blue-400/10 active:text-blue-600 active:outline-none
                data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none
                dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="{{ route('dashboard') }}" data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm96 288H448c17.7 0 32-14.3 32-32V251.8c0-7.6-2.7-15-7.7-20.8l-65.8-76.8c-12.1-14.2-33.7-15-46.9-1.8l-21 21c-10 10-26.4 9.2-35.4-1.6l-39.2-47c-12.6-15.1-35.7-15.4-48.7-.6L135.9 215c-5.1 5.8-7.9 13.3-7.9 21.1v84c0 17.7 14.3 32 32 32z" />
                        </svg>
                    </span>
                    <span class="text-lg font-semibold">Home</span></a>
            </li>
        @endif --}}




    </ul>
</nav>

