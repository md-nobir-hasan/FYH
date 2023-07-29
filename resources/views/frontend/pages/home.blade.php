@extends('frontend.layout.app')
@push('title')
    Home
@endpush

@section('content')
    <!-- navbar section -->
    <div class="" style="font-family: 'Poppins';">

        <!-- hero section -->
        <div class="mt-[116px] flex w-[1320px] mx-auto">
            <div class="w-[754px]">

                <h3 class="text-[68px] font-bold text-[#212427]">
                    @if ($home !== null)
                        {{ $home->title_one }}
                    @endif
                </h3>
                <p class=" capitalize w-[749px] mt-[10px] font-normal text-xl ">
                    @if ($home !== null)
                        {{ $home->title_one_description }}
                    @endif
                </p>
                <h3 class="text-[68px] font-bold mt-[25px] text-[#212427]">
                    @if ($home !== null)
                        {{ $home->title_two }}
                    @endif
                </h3>
                <p class="capitalize mt-[10px] font-normal text-xl ">
                    @if ($home !== null)
                        {{ $home->title_two_description }}
                    @endif
                </p>
                <div class="flex">
                    <a href="{{ $setting->trail ? route('register') : route('member') }}">
                        <div class="mt-[50px] text-white w-72 rounded flex justify-center items-center h-16 font-bold"
                            style="background-color:#D1052C"><button
                                class="mr-1 text-xl font-bold">{{ $setting->trail ? 'Start Free Trail' : 'Join FYH now' }}</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </a>
                    <a href="{{ route('about') }}" class="mt-8">
                        <p class="mt-[48px] flex justify-center items-center ml-5 font-semibold underline decoration-3"
                            style="color:
                #D1052C">Learn More</p>
                    </a>

                </div>
            </div>
            <!-- make changing section -->
            <div class="mt-[40px]">
                @if ($home !== null)
                    <img src="/images/Theme.png" alt="" class="w-[605px] h-[406px]  ml-[40px] absolute">
                @endif
            </div>
            <!-- make changing section end -->
        </div>
        <!-- Benifit section start -->

        <div class="mt-[100px] pt-[31px]"
            style="background:url(/images/benifitbg.png);background-size:100% 395px;background-repeat:no-repeat; ">
            <div>
                <h1 class="text-[50px] font-bold text-center text-[#212427]">
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
            <div class="mx-auto grid grid-cols-3 gap-6 mt-[20px] w-[1320px]">

                @if ($benefits->count() > 0)
                    @foreach ($benefits as $item)
                        <a href="#"
                            class=" w-[424px] h-[234px] px-6 py-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 overflow-hidden dark:border-gray-700 dark:hover:bg-gray-700">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                class="h-20 w-20 mx-auto rounded-full"
                                style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                            <h5
                                class="mb-[10px] mt-[20px] text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">
                                {{ $item->title }} </h5>
                            <p class="font-normal text-sm text-center">
                                {!! $item->first_para !!}
                            </p>
                        </a>
                    @endforeach
                @endif



            </div>
            <!-- benifit card section end-->
        </div>
        <!-- Benifit section end -->
        <!-- Featured story start -->
        <section class="mt-[100px]">
            <div>
                <h1 class="text-[50px] font-bold text-center text-[#212427]">
                    @if ($home !== null)
                        {{ $home->feature_title }}
                    @endif
                </h1>
                <p class="text-center text-2xl font-normal">
                    @if ($home !== null)
                        {{ $home->feature_subtitle }}
                    @endif
                </p>
            </div>

            @if ($featureStory->count() > 0)
                @foreach ($featureStory->slice(0, 1) as $firstfeature)
                    <div class="w-[1320px] mx-auto mt-[20px] grid grid-cols-1 lg:grid-cols-5">
                        <div class="col-span-2">
                            @php
                                $title = $firstfeature->title;
                            @endphp
                            {{-- @dd($firstfeature) --}}
                            <img src="{{ asset($firstfeature->feature_img) }}" alt="" class="h-[316px] w-[561px]">
                            <div class="absolute ml-[60px] mt-[-158px]" style="">
                                <h1 class=" text-white  text-[50px] font-black">
                                    {!! $firstfeature->title !!}
                                </h1>
                                {{-- <h1 class=" text-white  text-[50px] font-black text-center"> {!! $firstfeature->title !!}</h1> --}}
                            </div>
                        </div>
                        <div class="col-span-3">

                            <div class="ml-6">
                                <p class=" font-normal text-base text-[#212427] text-justify">
                                    {!! $firstfeature->description !!} </p>
                                <div class="flex">
                                    <img src="/images/Ellipse 36.png" alt="" class="h-[52px] w-[52px] mt-[24px] ">
                                    <div class="mt-[24px] ml-[5px]">
                                        <h1 class="text-xl font-semibold text-[#212427]"> {{ $firstfeature->name }}.</h1>
                                        <p class="capitalize text-sm tracking-wider font-normal">
                                            {{ $firstfeature->profession }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if ($featureStory->count() > 0)
                @foreach ($featureStory->slice(1, 1) as $secondfeture)
                    <div class="mt-6 grid grid-cols-1 lg:grid-cols-5 w-[1320px] mx-auto">

                        <div class="col-span-3">
                            <div>
                                <p class=" font-normal text-base text-justify"> {!! $secondfeture->description !!} </p>
                                <div class="flex">
                                    <img src="/images/Ellipse 36.png" alt="" class="h-[52px] w-[52px] mt-[24px]">
                                    <div class="mt-[24px] ml-3">
                                        <h1 class="text-xl font-semibold text-[#212427]"> {{ $secondfeture->name }} </h1>
                                        <p class="capitalize text-base font-normal"> {{ $secondfeture->profession }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 ml-4">

                            @php

                                $title = str_split($secondfeture->title, 15);

                            @endphp


                            <img src="{{ asset($secondfeture->feature_img) }}" alt="" class="h-[316px] w-[561px]">
                            <div class="absolute ml-[80px] mt-[-120px]" style="">
                                <h1 class=" text-white text-5xl font-black text-center"> {!! $secondfeture->title !!} </h1>
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


        </section>
        <!-- Featured story end -->
        <!-- Popular story start -->
        <section class="mt-[100px]"
            style="background:url(/images/benifitbg.png);background-size:100% 516px;background-repeat:no-repeat;background-position: 0px 100%">
            <div>
                <h1 class="text-[50px] font-bold text-center text-[#212427]">
                    @if ($home !== null)
                        {{ $home->story_title }}
                    @endif
                </h1>
                <p class="text-center font-normal text-2xl">
                    @if ($home !== null)
                        {{ $home->story_subtitle }}
                    @endif
                </p>
            </div>
            <div class="w-[1320px] mx-auto gap-6 grid grid-cols-1 lg:grid-cols-3 mt-[20px]">


                @if ($popularStory->count() > 0)
                {{-- @dd($popularStory) --}}
                    @foreach ($popularStory as $pStory)
                        <div
                            class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class=" lg:h-[424px] w-full" src="{{ $pStory->image }}" alt="" />
                            </a>
                            <div class="px-[22px] pt-[20px] h-[516px]">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-[#212427]">" {!! $pStory->title !!}
                                        "</h5>
                                </a>
                                <p class="mt-[20px] text-sm font-normal text-[#212427] text-justify">
                                    {{ Str::limit($pStory->description, 595) }} </p>
                                <a href="{{ route('single-story', $pStory->slug) }}"
                                    class="text-[#D1052C] text-[16px] font-bold">
                                    Read more
                                </a>
                                <h1 class="text-xl font-semibold mt-[20px]"> {{ $pStory->name }} <h1>
                                        <p class="capitalize text-sm font-normal">{{ $pStory->profession }}</p>
                                        <p class="capitalize text-sm font-normal">{{ $pStory->address }} ,
                                            {{-- {{$pStory->country->country}} --}}
                                        </p>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </section>
        <!-- Popular story end -->
        <!-- successfull story Candidate start -->
        <section class="mt-[100px]"
            style="background:url(/images/successbg.png);background-size:100%;background-repeat:no-repeat; background-position:0 30%">
            <h1 class="text-5xl font-bold text-center text-[#D1052C]">
                @if ($storyCount !== null)
                    {{ number_format($storyCount) }}
                @endif
            </h1>

            <p class="text-center font-normal text-2xl uppercase">
                @if ($home !== null)
                    {{ $home->image_title }}
                @endif
            </p>
            <p class="text-center font-normal text-sm">

                @php
                    $subtitle = str_split($home->image_subtitle, 50);
                @endphp

                @if ($home !== null)
                    @foreach ($subtitle as $subItem)
                        {{ $subItem }} <br>
                    @endforeach
                @endif
            </p>
            <div class="flex items-center justify-center mt-5">
                @if ($home !== null)
                    <img src="{{ '/storage/' . $home->lgImage }}" alt="" class="lg:h-[791px] lg:w-[845px]">
                @endif
            </div>
            <a href="{{ route('community') }}" class=" flex justify-center items-center"><button
                    class="lg:w-48 mt-5 p-3 rounded-lg font-bold text-base  bg-[#D1052C] text-white">Read All
                    Stories</button></a>
        </section>

        <!-- successfull story Candidate end -->
        <!-- Get Service Start -->
        <section class="mt-[163px]">
            <h1 class="text-center text-[50px] font-bold text-[#212427]">
                @if ($home !== null)
                    {{ $home->service_title }}
                @endif
            </h1>
            <p class="text-center font-normal uppercase text-xl">
                @if ($home !== null)
                    {{ $home->service_subtitle }}
                @endif
            </p>
            <div class="w-[1320px] mx-auto mt-10 grid grid-cols-7">


                @if ($services->count() > 0)
                    @foreach ($services as $item)
                        <div class="mr-[27px] ml-4">
                            <div class="flex justify-center items-center"><img src="{{ asset($item->image) }}"
                                    alt="" class="w-[100px] h-[100px]" /></div>
                            <h1 class="font-semibold text-xl text-center"> {{ $item->title }} </h1>
                            <p class="text-center lg:-mx-20 text-base font-normal"> {!! $item->description !!} </p>
                        </div>
                        @if (!$loop->last)
                            <div class="mt-16">
                                <hr class="border w-[193px] -mt-[15px] bg-[#D9D9D9]">
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </section>
        <!-- Get Service end -->

        <!-- What our member say  -->
        <div class="mt-[100px] pb-28"
            style="background:url(/images/benifitbg.png);background-size:100% 387px;background-repeat:no-repeat; background-position:0 125px">
            <h1 class="font-bold text-[50px] text-[#212427] text-center">
                @if ($home !== null)
                    {{ $home->customer_title }}
                @endif
            </h1>
            <p class="text-2xl font-normal text-center text-[#212427]">
                @if ($home !== null)
                    {{ $home->customer_subtitle }}
                @endif
            </p>

            <!-- success card  -->
            <div class="w-[1320px] mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4 mt-10">

                @if ($member_says->count() > 0)
                    @foreach ($member_says as $item)
                        <a href="{{ route('single-story', $item->slug) }}"
                            class="w-[424px] h-[304px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 overflow-hidden">
                            <div class="flex">
                                <img src="{{ $item->image }}" alt=""
                                    class="h-[103px] w-[103px] rounded-full ml-[17px]"
                                    style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                <div class="ml-[14px] mt-[20px]">
                                    <h1 class="text-[28px] font-semibold"> {{ $item->name }} </h1>
                                    <p class="font-normal text-xl"> {{ $item->profession }} </p>
                                </div>
                            </div>
                            <h5
                                class="text-6xl ml-[17px] mb-[-20px] font-extrabold tracking-tight text-black dark:text-white">
                                “</h5>
                            <p class="font-normal mx-[17px] text-justify text-base dark:text-gray-400">
                                {!! Str::limit( $item->description,235) !!}
                            </p>
                        </a>
                    @endforeach
                @endif


            </div>
            <!-- success card end -->
            <svg class="mx-auto mt-5" width="65" height="15" viewBox="0 0 65 15" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="7.5" cy="7.5" r="7.5" fill="#D1052C" />
                <circle cx="32.5" cy="7.5" r="7.5" fill="#D9D9D9" />
                <circle cx="57.5" cy="7.5" r="7.5" fill="#D9D9D9" />
            </svg>
        </div>
        <!-- Success section end -->

        <!-- last section start -->
        <section class=" mb-[-100px]"
            style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
            <div
                class="pb-10 py-28 "style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;">
                <div class="pb-14 shadow-lg">
                    <h1 class="font-bold text-[50px] text-[#212427] text-center">
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
                                {{ $Shitem }} <br>
                            @endforeach
                        @endif
                    </p>
                    @auth
                        <a href="{{ route('share.story') }}" class=" flex justify-center items-center"><button
                                class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                                Story</button></a>
                    @else
                        @if ($setting->trail)
                            <a href="{{ route('register') }}" class=" flex justify-center items-center"><button
                                    class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                                    Story</button></a>
                        @else
                            <a href="{{ route('member') }}" class=" flex justify-center items-center"><button
                                    class="lg:w-48 mt-3 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                                    Story</button></a>
                        @endif
                    @endauth
                </div>

            </div>
        </section>
        <!-- last section end -->
    </div>
@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
