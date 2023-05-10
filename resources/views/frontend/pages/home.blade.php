@extends('frontend.layout.app')
@push('title')
    Home
@endpush
@section('content')
    <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="">
                <div class="">
                    <a href="{{route('login')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <h1 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Hi, Nayeem how are you</h1>
                        </div>
                    </a>
                    <a href="{{route('member')}}">Go Member Page</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- navbar section -->
    <div class="mx-40" style="font-family: 'Montserrat';">
    
    <!-- hero section -->
        <div class="mt-16 grid grid-cols-2">
            <div>
            <h3 class="text-5xl font-bold">Do you want to move <br> in Switzerland ?</h3>  
            <p class="font-semibold">At Fyh service you Can Find All Necessary information to take the Decision That can Change Your life</p>
            <h3 class="text-5xl font-bold mt-5">Already Relocated ?</h3>
            <p class="font-semibold">At FYH service You Can Find All Necessary Information to Integrate Into Switzerland</p>
            <div class="flex">
            <div class="mt-10 text-white w-72 rounded flex justify-center items-center h-16 font-semibold" style="background-color:#D1052C"><button class="mr-1 font-lg">Join FYH now</button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>
        </div>
            <p class="mt-10 flex justify-center items-center ml-12 font-semibold underline decoration-3" style="color:
                #D1052C"><a href="">Learn More</a></p>
                
            </div>
            </div>  
            <!-- make changing section -->
            <div>
            <img src="{{asset('/images/changing.png')}}" alt="" class="mt-[-20px] lg:w-[450px]">
            </div>
            <!-- make changing section end -->
        </div>
        <!-- Benifit section start -->

        <div class="mt-40">
            <div>
                <h1 class="text-4xl font-bold text-center">Benefits of living in Switzerland</h1>
                <p class=" text-center text-lg font-normal">Why is Switzerland so attractive for living and working?</p>        
            </div>
            <!-- benifit card section -->
            <div class="grid grid-cols-3 gap-8 mt-10">

            <a href="#" class="block w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('/images/sofa.png')}}" alt="" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">High standard of living</h5>
            <p class="font-medium text-sm dark:text-gray-400 text-center">Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s, when</p>
            </a>
            <a href="#" class="block w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('/images/location.png')}}" alt="" class="h-16 w-16 mx-auto rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Geographical location</h5>
            <p class="font-medium text-sm dark:text-gray-400 text-center">Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s, when</p>
            </a>
            <a href="#" class="block w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('/images/climate.png')}}" alt="" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Comfortable Climate</h5>
            <p class="font-medium text-sm dark:text-gray-400 text-center">Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s, when</p>
            </a>
            <a href="#" class="block mt-[-18px] w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('/images/ecology.png')}}" alt="" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Ecology</h5>
            <p class="font-medium text-sm dark:text-gray-400 text-center">Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s, when</p>
            </a>
            <a href="#" class="block mt-[-18px] w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('/images/safety.png')}}" alt="" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Safety</h5>
            <p class="font-medium text-sm dark:text-gray-400 text-center">Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s, when</p>
            </a>
            <a href="#" class="block mt-[-18px] w-80 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <svg style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);" class="h-16 w-16 mx-auto rounded-full p-2" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M40.8553 22.9731L37.4123 11.9557C38.3008 11.5381 38.9966 10.7766 39.3276 9.84383H40.7695C41.4491 9.84383 42 9.29291 42 8.61336C42 7.93382 41.4491 7.38289 40.7695 7.38289H39.3274C38.8195 5.95071 37.4518 4.92196 35.8477 4.92196C34.2435 4.92196 32.8758 5.95071 32.3679 7.38289H29.7458C29.3404 6.53182 28.5284 5.91076 27.5625 5.77196V2.87109C27.5625 1.28797 26.2745 0 24.6914 0H15.668C14.0848 0 12.7969 1.28797 12.7969 2.87109V7.38281H9.63211C9.12417 5.95063 7.75646 4.92188 6.15234 4.92188C4.54822 4.92188 3.18052 5.95063 2.67258 7.38281H1.23047C0.550922 7.38281 0 7.93373 0 8.61328C0 9.29283 0.550922 9.84375 1.23047 9.84375H2.67258C3.00349 10.7767 3.6992 11.538 4.58768 11.9556L1.14475 22.9731C0.505395 23.0172 0 23.5485 0 24.1992V25.8398C0 29.2322 2.75994 31.9922 6.15234 31.9922C9.54475 31.9922 12.3047 29.2322 12.3047 25.8398V24.1992C12.3047 23.5485 11.7993 23.0172 11.1599 22.9731L7.71693 11.9556C8.60541 11.538 9.30111 10.7767 9.63203 9.84375H12.7969V13.3361C12.7969 15.7338 13.6669 17.9977 15.2578 19.7674V22.22C14.7802 22.389 14.4375 22.8434 14.4375 23.3789V40.7695C14.4375 41.4491 14.9884 42 15.668 42H26.332C27.0116 42 27.5625 41.4491 27.5625 40.7695V23.3789C27.5625 22.8434 27.2198 22.389 26.7422 22.22V19.709L29.7538 15.9445C29.9284 15.7263 30.0234 15.4553 30.0234 15.1758V9.84375H32.3678C32.6988 10.7765 33.3946 11.5381 34.2831 11.9556L30.8401 22.973C30.2007 23.0172 29.6953 23.5485 29.6953 24.1992V25.8398C29.6953 29.2322 32.4553 31.9922 35.8477 31.9922C39.2401 31.9922 42 29.2322 42 25.8398V24.1992C42 23.5485 41.4946 23.0172 40.8553 22.9731ZM6.15234 7.38281C6.83082 7.38281 7.38281 7.9348 7.38281 8.61328C7.38281 9.29176 6.83082 9.84375 6.15234 9.84375C5.47386 9.84375 4.92188 9.29176 4.92188 8.61328C4.92188 7.9348 5.47386 7.38281 6.15234 7.38281ZM9.84375 25.8398C9.84375 27.8753 8.18779 29.5312 6.15234 29.5312C4.1169 29.5312 2.46094 27.8753 2.46094 25.8398V25.4297H9.84375V25.8398ZM3.72446 22.9688L6.15234 15.1995L8.58022 22.9688H3.72446ZM35.8477 7.38281C36.5261 7.38281 37.0781 7.9348 37.0781 8.61328C37.0781 9.29176 36.5261 9.84375 35.8477 9.84375C35.1692 9.84375 34.6172 9.29176 34.6172 8.61328C34.6172 7.9348 35.1692 7.38281 35.8477 7.38281ZM15.2578 2.87109C15.2578 2.64493 15.4418 2.46094 15.668 2.46094H24.6914C24.9176 2.46094 25.1016 2.64493 25.1016 2.87109V5.74219H21.8203C20.446 5.74219 19.2672 6.59179 18.7793 7.79297H16.4883C15.8098 7.79297 15.2578 7.24098 15.2578 6.5625V2.87109ZM25.1016 39.5391H16.8984V24.6094H25.1016V39.5391ZM27.5625 14.7441L24.5509 18.5086C24.3763 18.7268 24.2812 18.9979 24.2812 19.2773V22.1484H17.7188V19.2773C17.7188 18.951 17.5891 18.6381 17.3583 18.4073C16.0038 17.0527 15.2578 15.2517 15.2578 13.3361V10.0423C15.6429 10.1788 16.057 10.2539 16.4883 10.2539H18.7793C19.209 11.3119 20.1747 12.0971 21.338 12.2693C20.5953 13.3403 20.1797 14.6303 20.1797 15.9961C20.1797 16.6756 20.7306 17.2266 21.4102 17.2266C22.0897 17.2266 22.6406 16.6756 22.6406 15.9961C22.6406 14.4412 23.5046 13.0433 24.8953 12.348L25.2417 12.1748C25.7522 11.9196 26.0201 11.347 25.889 10.7915C25.7579 10.2361 25.2621 9.84375 24.6914 9.84375H21.8203C21.368 9.84375 21 9.47576 21 9.02344C21 8.57112 21.368 8.20312 21.8203 8.20312H27.1523C27.3785 8.20312 27.5625 8.38712 27.5625 8.61328V14.7441ZM35.8477 15.1995L38.2755 22.9688H33.4199L35.8477 15.1995ZM39.5391 25.8398C39.5391 27.8753 37.8831 29.5312 35.8477 29.5312C33.8122 29.5312 32.1562 27.8753 32.1562 25.8398V25.4297H39.5391V25.8398Z" fill="#00AA63"/>
            </svg>

            <!-- <img src="{{asset('/images/sofa.png')}}" alt="" class="h-16 w-16 mx-auto rounded-full p-2" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);"> -->
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Political neutrality</h5>
            <p class="font-medium text-sm dark:text-gray-400 text-center">Lorem Ipsum is simply dummy te of the printi ting and typese indu. Lorem Ipsum has been the indy's standard dummy text ever since the 1500s, when</p>
            </a>

            </div>
            <!-- benifit card section end-->
        </div>
        <!-- Benifit section end -->

        <!-- Success section start -->
        <div class="mt-10">
            <h1 class="font-bold text-4xl text-center">Our Success Story</h1>
            <p class="text-lg text-center font-normal">Here’s all of the successful stories of our cusomers</p>

            <!-- success card  -->
            <div class="grid grid-cols-3 gap-8 mt-10">

            <a href="#" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="{{asset('/images/Ellipse 36.png')}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold">Thomas T.</h1>
            <p class="font-medium text-lg">marketing Manager</p>
            </div>
            </div>
            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
            <p class="font-medium text-sm dark:text-gray-400">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five ...</p>
            </a>
            <a href="#" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="{{asset('/images/angelia.png')}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold">Angelia F.</h1>
            <p class="font-medium text-lg">Marketing Manager</p>
            </div>
            </div>
            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
            <p class="font-medium text-sm dark:text-gray-400">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five ...</p>
            </a>
            <a href="#" class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex">
            <img src="{{asset('/images/emma.png')}}" alt="" class="h-16 w-16 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <div class="ml-2">
            <h1 class="text-2xl font-bold">Emma D.</h1>
            <p class="font-medium text-lg">Engineer</p>
            </div>
            </div>
            <h5 class="text-6xl font-extrabold tracking-tight text-black dark:text-white mb-[-20px]">“</h5>
            <p class="font-medium text-sm dark:text-gray-400">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five ...</p>
            </a>
            </div>
            <!-- success card end -->
        </div>
        <!-- Success section end -->

        <!-- services section start -->
                <div class="mt-20">
                    <h1 class="text-4xl font-bold text-center">How To Get The Services</h1>
                    <p class="text-lg font-normal text-center">Our Application process is very easy to use and user friendly. Let’s start...</p>
                    <!-- services here -->
                    <div class="mt-10 flex mx-auto">
                    <div><img src="{{asset('/images/group.png')}}" alt="" class="h-56 w-56  rounded-full p-16 mr-16" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                    <h1 class="text-center text-2xl font-bold mt-5 mr-5">Select Packages</h1>
                    <p class="font-normal text-justify w-56">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                </div>
                    <div>
                        <img src="{{asset('/images/monitor.png')}}" alt="" class="h-56 w-56  rounded-full p-16 mr-16" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                        <h1 class="text-center text-2xl font-bold mt-5 mr-5">Fill The Form</h1>
                    <p class="font-normal text-justify w-56">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                </div>
                    <div>
                        <img src="{{asset('/images/credit.png')}}" alt="" class="h-56 w-56  rounded-full p-16 mr-16" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                        <h1 class="text-center text-2xl font-bold mt-5 mr-5">Make Payment</h1>
                    <p class="font-normal text-justify w-56">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                </div>
                    <div>
                        <img src="{{asset('/images/enjoy.png')}}" alt="" class="h-56 w-56  rounded-full p-16 mr-5" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                        <h1 class="text-center text-2xl font-bold mt-5 mr-5">Enjoy</h1>
                    <p class="font-normal text-justify w-56">Lorem Ipsum is simply dummy text of the printi ting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                </div>
                    </div>
                    <!-- services end -->
                </div>
        <!-- services section end -->
    </div>
    <!-- Testimonial section start -->
    <div class="lg:mx-36 mt-10">
            <h1 class="text-center text-4xl font-bold">Testomonials</h1>
            <p class="text-center font-normal text-lg">What Our satisfied customer says about our platform</p>
            <!-- content testimonial -->

            <div class="my-5">
                <div class="grid grid-cols-3">
                
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-24">
                <a href="#">
                    <img class="rounded-t-lg p-5" src="{{asset('/images/man1.png')}}" alt="" />
                     </a>
                <div>
                <a href="#">
                <h5 class=" text-2xl font-bold text-center">David M.</h5>
                 </a>
                 <p class=" font-semibold text-center">English Teacher</p>
                </div>
        </div>
        <!-- right side content -->
        <div class="ml-10 col-span-2">
            <img src="{{asset('/images/love.png')}}" />
            <img class="mt-3" src="{{asset('/images/ratings.png')}}" />
            <p class="font-normal text-lg text-justify">I was struggling to find a job that aligned with my skills and experience, and I was starting to feel hopeless. That's when I found FYH. From the first consultation, they provided personalized guidance and support, taking the time to understand my career goals and helping me to identify job opportunities that matched my skill set. With their help, I was able to craft a strong resume and cover letter that really showcased my strengths. I even received interview coaching, which helped me to feel more confident and prepared when meeting with potential employers. Thanks to FYH, I was able to land a job that I'm truly excited about and that offers great opportunities for growth. I can't thank them enough for their excellent service and support throughout my job search journey.</p>
            <div class="flex truncate scroll mt-10">
            <img src="{{asset('/images/man3.png')}}" alt="" class="h-12 w-12 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man4.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man5.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man6.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man7.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man8.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man9.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man10.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man11.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man12.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man1.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <img src="{{asset('/images/man2.png')}}" alt="" class="h-12 w-12 ml-10 rounded-full" style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            </div>
        </div>
        <!-- right side content end -->

                </div>
            </div>
            <!-- content testimonial end -->
    </div>
    
    <!-- Testimonial section end -->
@endsection
@push('js')
<!-- flowbite cdn -->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<!-- flowbite cdn end -->
@endpush
