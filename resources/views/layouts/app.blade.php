<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @isset($title) {{$title}} - @endisset{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body{
                background-color: #80808042;
            }
        </style>
    </head>
    {{-- <body class="font-sans antialiased"> --}}
        <body class="dark:bg-zinc-800">
            <!--Main Navigation-->
              <!-- Sidenav -->
              <nav
                id="sidenav-1"
                class="fixed top-0 left-0 z-[1035]  h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800 md:data-[te-sidenav-hidden='false']:translate-x-0"
                data-te-sidenav-init
                data-te-sidenav-hidden="false"
                data-te-sidenav-mode-breakpoint-over=""
                data-te-sidenav-mode-breakpoint-side="md"
                data-te-sidenav-content="#h"
                data-te-sidenav-accordion="true"
                >
                <a
                  class="mb-3 flex items-center justify-center py-4 outline-none"
                  href="#!"
                  data-te-ripple-init
                  data-te-ripple-color="primary">
                <x-application-logo></x-application-logo>
                </a>

                <ul
                  class="relative m-0 list-none px-[0.2rem]"
                  data-te-sidenav-menu-ref>
                  <li class="relative">
                    <a
                      class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                      href="{{route('dashboard')}}"
                      data-te-sidenav-link-ref>
                      <span
                        class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512">
                          <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                          <path
                            d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm96 288H448c17.7 0 32-14.3 32-32V251.8c0-7.6-2.7-15-7.7-20.8l-65.8-76.8c-12.1-14.2-33.7-15-46.9-1.8l-21 21c-10 10-26.4 9.2-35.4-1.6l-39.2-47c-12.6-15.1-35.7-15.4-48.7-.6L135.9 215c-5.1 5.8-7.9 13.3-7.9 21.1v84c0 17.7 14.3 32 32 32z" />
                        </svg>
                      </span>
                      <span class="text-lg font-semibold">Home</span></a
                    >
                  </li>
                  <li class="relative">
                    <a
                      class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                      data-te-sidenav-link-ref>
                      <span
                        class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                          </svg>

                      </span>
                      <span class="text-lg font-semibold">User Management</span>
                      <span
                        class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 motion-reduce:transition-none [&>svg]:h-3 [&>svg]:w-3 [&>svg]:fill-gray-600 group-hover:[&>svg]:fill-blue-600 group-focus:[&>svg]:fill-blue-600 group-active:[&>svg]:fill-blue-600 group-[te-sidenav-state-active]:[&>svg]:fill-blue-600 dark:[&>svg]:fill-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 448 512">
                          <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                          <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                      </span>
                    </a>
                    <ul
                      class="show !visible relative m-0 @if (!Request::is('admin/user/*')) hidden @endif list-none p-0 data-[te-collapse-show]:block"
                      data-te-sidenav-collapse-ref @if (Request::is('admin/user/*') ) data-te-collapse-show @endif>
                      <li class="relative">
                        <a href="{{route('admin.user.feature.index')}}"
                          class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                          data-te-sidenav-link-ref
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>

                          <span class="text-lg">Permissions</span></a
                        >
                      </li>
                      <li class="relative">
                        <a href="{{route('admin.user.role.index')}}"
                          class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                          data-te-sidenav-link-ref
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>

                          <span class="text-lg">Roles</span></a
                        >
                      </li>
                      <li class="relative">
                        <a
                          class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-blue-400/10 hover:text-blue-600 hover:outline-none focus:bg-blue-400/10 focus:text-blue-600 focus:outline-none active:bg-blue-400/10 active:text-blue-600 active:outline-none data-[te-sidenav-state-active]:text-blue-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                          data-te-sidenav-link-ref
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>

                          <span class="text-lg">Users</span></a
                        >
                      </li>
                    </ul>
                  </li>

                </ul>
              </nav>
              <!-- Sidenav -->

              <!-- Navbar -->
              <nav
                id="main-navbar"
                class="fixed z-50 top-0 right-0 left-0 flex w-full flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start xl:pl-60"
                data-te-navbar-ref>
                <!-- Container wrapper -->
                <div
                  class="flex w-full flex-wrap items-center justify-between px-4">
                  <!-- Toggler -->
                  <button
                    data-te-sidenav-toggle-ref
                    data-te-target="#sidenav-1"
                    class="block border-0 bg-transparent px-2.5 text-gray-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 md:hidden bg-[black]"
                    aria-controls="#sidenav-1"
                    aria-haspopup="true">
                    <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-5 w-5">
                        <path
                          fill-rule="evenodd"
                          d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                          clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>

                  <!-- Search form -->
                  {{-- <form
                    class="relative mr-auto ml-4 flex flex-wrap items-stretch xl:mx-0">
                    <input
                      autocomplete="off"
                      type="search"
                      class="focus:shadow-te-blue relative m-0 inline-block w-[1%] min-w-[225px] flex-auto rounded border border-solid border-gray-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition duration-300 ease-in-out focus:border-blue-600 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:placeholder:text-gray-200"
                      placeholder='Search (ctrl + "/" to focus)' />
                    <span
                      class="flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-gray-700 dark:text-gray-200 [&>svg]:w-4"
                      id="basic-addon2">
                      <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="search"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path
                          fill="currentColor"
                          d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                      </svg>
                    </span>
                  </form> --}}
                  <div>
                    <span  class="md:hidden">
                        <x-application-logo></x-application-logo>
                    </span>
                  </div>

                  <!-- Right links -->
                  <ul class="relative flex items-center">
                    <!-- Notification dropdown -->
                    <li class="relative" data-te-dropdown-ref>
                      <a
                        class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <span class="dark:text-gray-200 [&>svg]:w-3.5">
                          <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="bell"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                              fill="currentColor"
                              d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
                          </svg>
                        </span>
                        <span
                          class="absolute -mt-2.5 ml-2 rounded-full bg-red-600 py-[1px] px-1.5 text-[0.6rem] text-white"
                          >1</span
                        >
                      </a>
                      <ul
                        class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="navbarDropdownMenuLink"
                        data-te-dropdown-menu-ref>
                        <li>
                          <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                            >Some news</a
                          >
                        </li>
                        <li>
                          <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                            >Another news</a
                          >
                        </li>
                        <li>
                          <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                            >Something else here</a
                          >
                        </li>
                      </ul>
                    </li>


                    <!-- Avatar -->
                    <li class="relative" data-te-dropdown-ref>
                      <a
                        class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <img
                          src="https://tecdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                          class="rounded-full"
                          style="height: 22px; width: 22px"
                          alt="Avatar"
                          loading="lazy" />
                      </a>
                      <ul
                        class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2"
                        data-te-dropdown-menu-ref>
                        <li>
                          <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="{{route('profile.edit')}}"
                            data-te-dropdown-item-ref
                            >My profile</a
                          >
                        </li>
                        <li>
                          <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#"
                            data-te-dropdown-item-ref
                            >Settings</a
                          >
                        </li>
                        <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button
                                class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30 text-left"
                                >Logout</button>
                            </form>
                          {{-- <a
                            class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="{{route('logout')}}"
                            data-te-dropdown-item-ref
                            ></a --}}
                          {{-- > --}}
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- Container wrapper -->
              </nav>
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
            <footer></footer>
            <!--Footer-->
            @isset ($js)
                {{$js}}
            @endisset
    </body>
</html>
