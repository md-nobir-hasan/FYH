<nav
                id="main-navbar"
                class="fixed z-50 top-0 right-0 left-0 flex w-full h-[65px] flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start xl:pl-60"
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
                          >{{count($cumtomers)}}</span
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
