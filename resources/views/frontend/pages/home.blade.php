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
                        <a href="{{ route('login') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h1 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Hi, Nayeem how are you</h1>
                            </div>
                        </a>
                        <a href="{{ route('member') }}">Go Member Page</a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- navbar section -->
    <div class="lg:mx-40" style="font-family: 'Poppins';">

        <!-- hero section -->
        <div class="mt-16 grid grid-cols-2">
            <div class="">

                <h3 class="text-6xl font-black">
                    @if ($home !== null)
                        {{ $home->title_one }}
                    @endif
                </h3>
                <p class="text-md capitalize my-2 font-semibold font-sans">
                    @if ($home !== null)
                        {{ $home->title_one_description }}
                    @endif
                </p>
                <h3 class="text-5xl font-black mt-5">
                    @if ($home !== null)
                        {{ $home->title_two }}
                    @endif
                </h3>
                <p class="text-md capitalize my-2 font-semibold font-sans">
                    @if ($home !== null)
                        {{ $home->title_two_description }}
                    @endif
                </p>
                <div class="flex">
                    <a href="{{$setting->trail ? route('register') : route('member') }}">
                        <div class="mt-10 text-white w-72 rounded flex justify-center items-center h-16 font-semibold"
                            style="background-color:#D1052C"><button class="mr-1 font-lg">{{$setting->trail ? 'Start Free Trail' : 'Join FYH now'}}</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </a>
                    <a href="{{ route('about') }}" class="mt-8">
                        <p class="mt-10 flex justify-center items-center ml-12 font-semibold underline decoration-3"
                            style="color:
                #D1052C">Learn More</p>
                    </a>

                </div>
            </div>
            <!-- make changing section -->
            <div class="ml-5">
                @if ($home !== null)
                    <img src="{{ '/storage/' . $home->image }}" alt="" class="mt-[-20px] lg:w-[450px]">
                @endif
            </div>
            <!-- make changing section end -->
        </div>
        <!-- Benifit section start -->

        <div class="mt-40">
            <div>
                <h1 class="text-5xl font-black text-center text-[#212427]">
                    @if ($home !== null)
                        {{ $home->benefit_title }}
                    @endif
                </h1>
                <p class=" text-center text-2xl font-normal">
                    @if ($home !== null)
                        {{ $home->benefit_subtitle }}
                    @endif
                </p>
            </div>
            <!-- benifit card section -->
            <div class="grid grid-cols-3 gap-8 mt-10">

                @if ($benefits->count() > 0)
                    @foreach ($benefits as $item)
                        <a href="#"
                            class="block w-80 px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <img src="{{ '/storage/' . $item->image }}" alt="{{ $item->title }}"
                                class="h-16 w-16 mx-auto rounded-full"
                                style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                                {{ $item->title }} </h5>
                            <p class="font-medium text-sm text-justify">
                                {{ $item->description }}
                            </p>
                        </a>
                    @endforeach
                @endif



            </div>
            <!-- benifit card section end-->
        </div>
        <!-- Benifit section end -->
        <!-- Featured story start -->
        <section class="mt-[164px]">
            <div>
                <h1 class="text-5xl font-bold text-center text-[#212427]">
                    @if ($home !== null)   {{ $home->feature_title }} @endif </h1>
                <p class="text-center text-2xl">
                    @if ($home !== null)   {{ $home->feature_subtitle }} @endif
                </p>
            </div>

            @if ($featureStory->count() > 0)
                @foreach ($featureStory->slice(0, 1) as $firstfeature)
                    <div class="mt-3 grid grid-cols-1 lg:grid-cols-5">
                        <div class="col-span-2">
                            @php
                                $title = str_split($firstfeature->title, 15);
                            @endphp
                            <img src="{{ '/storage/' . $firstfeature->image }}" alt="" class="h-72 lg:w-96">
                            <div class="absolute mt-[-120px] ml-[80px]">
                                <h1 class=" text-white text-4xl font-black">
                                    {{ $title[0] }}
                                </h1>
                                <h1 class=" text-white ml-[30px] text-4xl font-black"> {{ $title[1] }} </h1>
                            </div>
                        </div>
                        <div class="col-span-3">

                            <div>
                                <p class="ml-5 text-justify"> {{ $firstfeature->description }} </p>
                                <div class="flex">
                                    <img src="/images/Ellipse 36.png" alt="" class="h-12 mt-3 ml-5">
                                    <div class="mt-3 ml-3">
                                        <h1 class="text-xl font-semibold text-black"> {{ $firstfeature->name }}.</h1>
                                        <p class="capitalize"> {{ $firstfeature->profession }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if ($featureStory->count() > 0)
                @foreach ($featureStory->slice(1, 1) as $secondfeture)
                    <div class="mt-3 grid grid-cols-1 lg:grid-cols-5">

                        <div class="col-span-3">
                            <div>
                                <p class="mr-5 text-justify"> {{ $secondfeture->description }} </p>
                                <div class="flex">
                                    <img src="/images/Ellipse 36.png" alt="" class="h-12 mt-3">
                                    <div class="mt-3 ml-3">
                                        <h1 class="text-xl font-semibold text-black"> {{ $secondfeture->name }} </h1>
                                        <p class="capitalize"> {{ $secondfeture->profession }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">

                            @php

                                $title = str_split($secondfeture->title, 15);

                            @endphp


                            <img src="/images/featured2.png" alt="" class="h-72">
                            <div class="absolute mt-[-120px] ml-[120px]">
                                <h1 class=" text-white text-4xl font-black text-center"> {{ $title[0] }} </h1>
                                <h1 class=" text-white ml-[-50px] text-4xl text-center font-black">{{ $title[1] }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


        </section>
        <!-- Featured story end -->
        <!-- Popular story start -->
        <section class="mt-[164px]">
            <div>
                <h1 class="text-5xl font-bold text-center text-[#212427]">
                      @if ($home !== null)     {{ $home->story_title }} @endif
                    </h1>
                <p class="text-center text-2xl">
                    @if ($home !== null)     {{ $home->story_subtitle }} @endif
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10">


                @if ($popularStory->count() > 0)
                     @foreach ($popularStory as $pStory)



                <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{'/storage/'. $pStory->image}}" alt=""  class=""/>
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-black tracking-tight text-[#212427]">" {{Str::limit($pStory->title, 28)}} "</h5>
                        </a>
                        <p class=" text-sm font-normal text-[#212427] text-justify"> {{Str::limit($pStory->description, 600)}} </p>
                        <a href="{{route('single-story', $pStory->slug)}}" class="text-[#D1052C] font-black">
                            Read more
                        </a>
                        <h1 class="text-xl font-bold mt-2"> {{$pStory->name}} <h1>
                                <p class="capitalize">{{$pStory->profession}}</p>
                                <p class="capitalize">{{$pStory->city}} ,{{$pStory->country->country}}</p>
                    </div>
                </div>

                @endforeach
                @endif


            </div>
        </section>
        <!-- Popular story end -->
        <!-- successfull story Candidate start -->
        <section class="mt-[140px]">
            <h1 class="text-4xl font-black text-center text-[#D1052C]">
                @if ($storyCount !== null)     {{ number_format($storyCount) }} @endif
            </h1>

            <p class="text-center text-2xl">    @if ($home !== null)     {{ $home->image_title }} @endif </p>
            <p class="text-center text-sm">

                @php
                $subtitle = str_split($home->image_subtitle, 50);
               @endphp

                @if ($home !== null)
                      @foreach ($subtitle as $subItem)
                          {{$subItem}} <br>
                      @endforeach
               @endif
            </p>
            <div class="flex items-center justify-center mt-5">
                @if ($home !== null)    <img src="{{'/storage/'. $home->lgImage}}" alt="" class="lg:h-[791px] lg:w-[845px]"> @endif
            </div>
            <a href="{{route('community')}}" class=" flex justify-center items-center"><button
                    class="lg:w-48 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">READ THE STORY</button></a>
        </section>

        <!-- successfull story Candidate end -->
        <!-- Get Service Start -->
        <section class="mt-[122px]">
            <h1 class="text-center text-5xl font-black text-[#212427]">
                  @if ($home !== null)     {{ $home->service_title }} @endif
                </h1>
            <p class="text-center text-2xl">
                @if ($home !== null)     {{ $home->service_subtitle }} @endif
            </p>
            <div class="mt-10 grid grid-cols-7">


                @if ($services->count() > 0)
                    @foreach ($services as $item)
                        <div>
                            <img src="{{ '/storage/' . $item->image }}" alt="" class="" />
                            <h1 class="font-semibold text-xl"> {{ Str::limit($item->title, 12) }} </h1>
                            <p class="w-56 text-justify"> {{ Str::limit($item->description, 140) }} </p>
                        </div>
                       @if (!$loop->last)
                        <div class="mt-16">
                            <hr class="h-px ml-[-10px] mr-[27px] bg-[#D9D9D9] border-0">
                        </div>
                       @endif
                    @endforeach
                @endif
            </div>
        </section>
        <!-- Get Service end -->
        <!-- Success section start -->
        <div class="mt-[165px]">
            <h1 class="font-bold text-5xl text-[#212427] text-center">
                @if ($home !== null)
                {{ $home->customer_title }}
            @endif
            </h1>
            <p class="text-2xl text-center text-[#212427]">
                @if ($home !== null)
                    {{ $home->customer_subtitle }}
                @endif
            </p>

            <!-- success card  -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-10">

                @if ($stories->count() > 0)
                    @foreach ($stories->slice(1, 3) as $item)
                        <a href="{{ route('single-story', $item->slug) }}"
                            class="block w-80 h-[250px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex">
                                <img src="{{ '/storage/' . $item->image }}" alt="" class="h-16 w-16 rounded-full"
                                    style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                <div class="ml-2">
                                    <h1 class="text-2xl font-bold"> {{ $item->name }} </h1>
                                    <p class="font-medium text-lg"> {{ $item->profession }} </p>
                                </div>
                            </div>
                            <h5 class="text-6xl mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">“</h5>
                            <p class="font-medium text-sm dark:text-gray-400">
                                {{ Str::limit($item->description, 250) }}
                            </p>
                        </a>
                    @endforeach
                @endif


            </div>
            <!-- success card end -->
        </div>
        <!-- Success section end -->
        <!-- last section start -->
        <section class="mt-28 mb-[-100px]">
            <h1 class="font-bold text-5xl text-[#212427] text-center">
                @if ($home !== null)
                {{ $home->share_title }}
            @endif
            </h1>
            @php
            $shareSub = str_split($home->share_subtitle, 90);
          @endphp
            <p class="text-xl text-center text-[#D1052C] uppercase">
                @if ($home !== null)
                  @foreach ($shareSub as $Shitem)
                       {{$Shitem}} <br>
                  @endforeach

            @endif
            </p>
            <a href="{{route('share.story')}}" class=" flex justify-center items-center"><button
                    class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                    Story</button></a>
        </section>
        <!-- last section end -->
    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
