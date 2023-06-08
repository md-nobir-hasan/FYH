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
    <div class="mt-12 lg:mx-40" style="font-family: 'Montserrat';">
        <div class="flex justify-center">
            <a href="{{route('home')}}"><img src="{{asset('/images/logo.jpg')}}" alt="" class="h-8 w-24"></a>
            <div class="flex justify-center">

              @if (auth()->user() ==null)
            <a href="{{route('member')}}">
                <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Membership</button>
            </a>
            @endif
       

            @auth
            <a href="{{route('share.story')}}">
              <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">ShareStory</button>
             </a>
             @endauth
             <a href="{{route('community')}}">
              <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Community</button>
          </a>
           
            <a href="{{route('benefit')}}">
                <button class="ml-12 font-semibold p-2 rounded" style="box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);">Benefits</button>
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
            
            @if (auth()->user() ==null)
            <a href="{{route('login')}}">

                <button class="ml-12 font-semibold p-1 text-white pl-5 pr-5 rounded" style="background-color:#D1052C; box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.08);"><a href="{{route('login')}}">Login</a></button>

            </a>
            @endif
          


            @auth
         
                
           
            <!-- love icon svg -->
            <svg class="mt-3 ml-5" width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13 23.25L11.1875 21.625C9.08333 19.7292 7.34375 18.0938 5.96875 16.7188C4.59375 15.3438 3.5 14.1094 2.6875 13.0156C1.875 11.9219 1.30729 10.9167 0.984375 10C0.661458 9.08333 0.5 8.14583 0.5 7.1875C0.5 5.22917 1.15625 3.59375 2.46875 2.28125C3.78125 0.96875 5.41667 0.3125 7.375 0.3125C8.45833 0.3125 9.48958 0.541667 10.4688 1C11.4479 1.45833 12.2917 2.10417 13 2.9375C13.7083 2.10417 14.5521 1.45833 15.5313 1C16.5104 0.541667 17.5417 0.3125 18.625 0.3125C20.5833 0.3125 22.2188 0.96875 23.5313 2.28125C24.8438 3.59375 25.5 5.22917 25.5 7.1875C25.5 8.14583 25.3385 9.08333 25.0156 10C24.6927 10.9167 24.125 11.9219 23.3125 13.0156C22.5 14.1094 21.4062 15.3438 20.0312 16.7188C18.6562 18.0938 16.9167 19.7292 14.8125 21.625L13 23.25ZM13 19.875C15 18.0833 16.6458 16.5469 17.9375 15.2656C19.2292 13.9844 20.25 12.8698 21 11.9219C21.75 10.974 22.2708 10.1302 22.5625 9.39062C22.8542 8.65104 23 7.91667 23 7.1875C23 5.9375 22.5833 4.89583 21.75 4.0625C20.9167 3.22917 19.875 2.8125 18.625 2.8125C17.6458 2.8125 16.7396 3.08854 15.9062 3.64063C15.0729 4.19271 14.5 4.89583 14.1875 5.75H11.8125C11.5 4.89583 10.9271 4.19271 10.0938 3.64063C9.26042 3.08854 8.35417 2.8125 7.375 2.8125C6.125 2.8125 5.08333 3.22917 4.25 4.0625C3.41667 4.89583 3 5.9375 3 7.1875C3 7.91667 3.14583 8.65104 3.4375 9.39062C3.72917 10.1302 4.25 10.974 5 11.9219C5.75 12.8698 6.77083 13.9844 8.0625 15.2656C9.35417 16.5469 11 18.0833 13 19.875Z" fill="#1C1B1F"/>
</svg>

            <!-- love icon svg end -->
            <!-- notification svg -->
            <svg class="mt-3 ml-5" width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 21.75V19.25H2.5V10.5C2.5 8.77083 3.02083 7.23438 4.0625 5.89062C5.10417 4.54688 6.45833 3.66667 8.125 3.25V0.5H11.875V3.25C13.5417 3.66667 14.8958 4.54688 15.9375 5.89062C16.9792 7.23438 17.5 8.77083 17.5 10.5V19.25H20V21.75H0ZM10 25.5C9.3125 25.5 8.72396 25.2552 8.23438 24.7656C7.74479 24.276 7.5 23.6875 7.5 23H12.5C12.5 23.6875 12.2552 24.276 11.7656 24.7656C11.276 25.2552 10.6875 25.5 10 25.5ZM5 19.25H15V10.5C15 9.125 14.5104 7.94792 13.5312 6.96875C12.5521 5.98958 11.375 5.5 10 5.5C8.625 5.5 7.44792 5.98958 6.46875 6.96875C5.48958 7.94792 5 9.125 5 10.5V19.25Z" fill="#1C1B1F"/>
</svg>

            <!-- notification svg end -->

            <div class="flex items-center ml-8 md:order-2">
      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-2 focus:ring-[#D1052C] dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-11 h-11 border border-[#D1052C] rounded-full " src="/images/thomas.png" >
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 lg:w-80 hidden my-4 text-base list-none bg-white rounded-lg shadow" id="user-dropdown">
        <div class="flex p-5">
            <img src="/images/thomas.png" class="border p-0.5 rounded-full border-[#D1052C]"/>
          <span class="flex justify-center items-center ml-2 text-lg text-black font-semibold dark:text-white">Thomas Tsangaras</span>
        </div>
        <hr class="h-px bg-black mx-4 border-0">
        <ul class="py-1" aria-labelledby="user-menu-button">
          




          <li>
            <a href="{{route('user.profile')}}" class="block text-lg px-4 py-1 font-medium text-black hover:bg-gray-100">Profile</a>
          </li>
          <li>
            <a href="{{route('user.profile.edit')}}" class="block text-lg px-4  text-black font-medium hover:bg-gray-100">Edit Profile</a>
          </li>
          <hr class="h-px bg-black mx-4 border-0">
          <li class="flex ml-4">
          
            <img src="/images/profileLogo.png" class="h-3 flex w-3 mt-4"/>
            <a href="{{route('user.myStroy')}}" class="block text-lg px-2 py-2 text-black font-medium hover:bg-gray-100">My Story</a>
          </li>
          <li class="flex ml-4">
          <img src="/images/profileLogo2.png" class="h-3 flex w-3 mt-1"/>
            <a href="{{route('user.membership.update')}}" class="block text-lg px-2 font-medium text-black hover:bg-gray-100">Membership Update</a>
          </li>
          <li class="flex ml-4">
          <img src="/images/profileLogo3.png" class="h-3 flex w-3 mt-3"/>
            <a href="{{route('help.support')}}" class="block text-lg px-2 pt-2 font-medium text-black hover:bg-gray-100">Help & Support</a>
          </li>
          <li class="flex ml-4">
            <img src="/images/logout.png" class="h-3 flex w-3 mt-3"/>
          <form action="{{route('logout')}}" method="POST">
             @csrf
            <button type="submit" class="block text-lg px-2 pt-2 font-medium text-black hover:bg-gray-100">Sign out</a>
          </form>
          </li>
        </ul>
        <hr class="h-px bg-black mx-4 border-0">
        <div class="flex justify-center items-center">
        <h1 class=""> <a href="{{route('terms.condition')}}">Terms & Condition</a></h1>
        <p class="ml-3"> <a href="{{route('cookies')}}">Cookie</a> </p>
        </div>
      </div>
  </div>

  @endauth
            </div>

        </div>
</div>
@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
@endpush
