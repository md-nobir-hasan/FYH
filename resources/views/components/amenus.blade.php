@php
    $menus = App\Models\Feature::with('children')
        ->where('feature_id', null)
        ->get();
@endphp
@foreach ($menus as $menu)
    <li class="relative">
        <a class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]  outline-none
                        transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600
                        focus:outline-none @if (Request::routeIs($menu->route_name . '*')) bg-blue-400/10 text-blue-600 @else text-gray-700 @endif active:bg-blue-400/10 active:text-blue-600 active:outline-none
                        data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none
                        dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            href="{{ route($menu->route_name) }}" data-te-sidenav-link-ref>
            <span
                class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm96 288H448c17.7 0 32-14.3 32-32V251.8c0-7.6-2.7-15-7.7-20.8l-65.8-76.8c-12.1-14.2-33.7-15-46.9-1.8l-21 21c-10 10-26.4 9.2-35.4-1.6l-39.2-47c-12.6-15.1-35.7-15.4-48.7-.6L135.9 215c-5.1 5.8-7.9 13.3-7.9 21.1v84c0 17.7 14.3 32 32 32z" />
                </svg>
            </span>
            <span class="text-lg font-semibold">{{ $menu->title }}</span></a>
    </li>
@endforeach
