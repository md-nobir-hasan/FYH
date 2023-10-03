@extends('frontend.layout.app')
@push('title')
    Home
@endpush

@section('content')
    <style>
        a:nth-child(2)>img {
            padding: 12px 20px 12px 20px;
        }

        a:nth-child(3)>img {
            padding: 16px;
        }

        a:nth-child(4)>img {
            padding: 15px;
        }

        a:nth-child(5)>img {
            padding: 17px;
        }

        a:nth-child(6)>img {
            padding: 19px 22px;
        }

        a:nth-child(7)>img {
            padding: 19px;
        }

        a:nth-child(8)>img {
            padding: 19px;
        }

        a:nth-child(9)>img {
            padding: 21px;
        }

        .bbg {
            background: url(/images/benifitbg.png);
            background-size: 100% 392px;
            background-repeat: no-repeat
        }

        .pbg {
            background-image: url(/images/benifitbg.png);
            background-size: 100% 516px;
            background-repeat: no-repeat;
            background-position: 0px 100%;
        }

        .mbg {
            background: url(/images/benifitbg.png);
            background-size: 100% 387px;
            background-repeat: no-repeat;
            background-position: 0 125px
        }

        @media (min-width: 0px) and (max-width: 767px) {
            .bbg {
                background-size: 100% 290px
            }

            .pbg {
                background-image: none
            }
        }

        @media (min-width: 768px) and (max-width: 820px) {
            .bbg {
                background-size: 100% 437px
            }
        }

        @media (min-width: 1061px) and (max-width: 1279px) {
            .bbg {
                background-size: 100% 413px
            }
        }

        @media (min-width: 1024px) and (max-width: 1060px) {
            .bbg {
                background-size: 100% 435px
            }
        }

        @media (min-width: 768px) and (max-width: 1020px) {
            .pbg {
                background-image: none
            }
        }

        @media (min-width: 1183px) and (max-width: 1279px) {
            .pbg {
                background-size: 100% 560px
            }
        }

        @media (min-width: 1108px) and (max-width: 1182px) {
            .pbg {
                background-size: 100% 613px
            }
        }

        @media (min-width: 1104px) and (max-width: 1107px) {
            .pbg {
                background-size: 100% 610px
            }
        }

        @media (min-width: 1024px) and (max-width: 1103px) {
            .pbg {
                background-size: 100% 655px
            }
        }

        @media (min-width: 0px) and (max-width: 1279px) {
            .horizontal {
                display: none
            }

        }

        @media (min-width: 0px) and (max-width: 1023px) {
            .mbg {
                background-image: none
            }
        }

        @media (min-width: 1310px) and (max-width: 1531px) {
            .ml {
                margin-left: 50px
            }

        }
    </style>
    <!-- navbar section -->
    <div class="" style="font-family: 'Poppins';">

        <!-- hero section -->
        <div class="lg:mt-[116px] mt-[50px] flex flex-col-reverse xl:flex-row xl:flex 2xl:w-[1320px] mx-auto hero ml">
            <div class="xl:w-[754px] lg:mx-auto xl:mx-5 2xl:ml-0 ">
                <h3
                    class="lg:text-[68px] mx-[5px] lg:text-center xl:text-start text-center text-[48px] xl:ml-0 2xl:ml-0 font-bold lg:leading-[85px] leading-[50px] text-[#212427]">
                    @if ($home !== null)
                        {{ $home->title_one }}
                    @endif
                </h3>
                <p
                    class="xl:ml-0 lg:text-center xl:text-start text-center 2xl:ml-0  xl:w-full  mt-[10px] font-normal text-[16px] lg:text-[20px] ">
                    @if ($home !== null)
                        {{ $home->title_one_description }}
                    @endif
                </p>
                <h3
                    class="xl:ml-0 lg:text-center xl:text-start text-center 2xl:ml-0 lg:text-[68px] text-[48px] leading-[50px] md:leading-[85px] font-bold mt-[25px] text-[#212427]">
                    @if ($home !== null)
                        {{ $home->title_two }}
                    @endif
                </h3>
                <p class="xl:ml-5 lg:text-center xl:text-start text-center 2xl:ml-0  mt-[10px] font-normal text-[16px] lg:text-[20px] ">
                    @if ($home !== null)
                        {{ $home->title_two_description }}
                    @endif
                </p>
                <div class="lg:flex lg:justify-center lg:items-center xl:justify-start block xl:ml-5 2xl:ml-0">
                    <a href="{{ $setting->trail ? route('register') : route('member') }}" class="">
                        <div class="mt-[50px] text-white lg:w-full lg:px-[128px] xl:px-[10px] xl:w-72 lg:mx-0 mx-[28px] lg:rounded-[35px] xl:rounded rounded-[25px] flex justify-center items-center py-[20px] font-bold"
                            style="background-color:#D1052C"><button
                                class=" text-xl font-bold">{{ $setting->trail ? 'Start Free Trail' : 'Join FYH now' }}</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </a>
                    <a href="{{ route('about') }}" class="ml-5 lg:flex hidden xl:hidden">
                        <p class="border border-[#D1052C] text-[25px] font-bold px-[128px] py-[12px] mt-[52px] rounded-[35px]"
                            style="color:
                #D1052C">Learn More</p>
                    </a>
                    <a href="{{ route('about') }}" class="ml-5 xl:flex hidden">
                        <p class="md:mt-[48px] flex justify-center items-center  md:ml-5 lg:font-semibold lg:underline lg:decoration-3"
                            style="color:
                #D1052C">Learn More</p>
                    </a>
                    <a href="{{ route('about') }}" class=" visible lg:hidden">
                        <p class="md:mt-[20px] mt-[20px] flex justify-center items-center lg:border-none border-2 mx-[28px] rounded-[25px] text-[20px] font-bold lg:py-0 lg:px-0 py-[20px] px-[80px] border-[D1052C]  md:ml-5 lg:font-semibold lg:underline lg:decoration-3"
                            style="color:
                #D1052C">Learn More</p>
                    </a>

                </div>
                
            </div>
            <!-- make changing section -->
            <div class="mt-[37px] mb-[30px] xl:mb-0 lg:block flex justify-center items-center">
                @if ($home !== null)
                    <img src="/storage/{{$home->image }}" alt=""
                        class="xl:w-[566px] xl:h-[315px] lg:w-[884px] lg:h-[493px] w-[320px] sm:w-[500px] md:w-[600px] lg:mx-auto xl:mx-0 2xl:ml-[40px]  2xl:absolute change">
                @endif
            </div>
            <!-- make changing section end -->
        </div>
        <!-- Benifit section start -->

        <div class="mt-[100px] pt-[31px] bbg">
            <div class="lg:mx-0 mx-5">
                <div>
                    <h1 class="text-[50px] font-bold text-center  text-[#212427] leading-[50px] lg:leading-normal">
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
                <div
                    class="2xl:mx-auto lg:mx-5 grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-6 mt-[20px] 2xl:w-[1320px]">

                    @if ($benefits->count() > 0)
                        @foreach ($benefits as $item)
                            <a href="{{ route('benefit.details', [$item->id]) }}"
                                class=" 2xl:w-[424px] w-full xl:h-[234px]  bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                                <img src="{{ '/storage/' . $item->image }}" alt="{{ $item->title }}"
                                    class="h-20 w-20 p-2 mx-auto mt-[16px] rounded-full"
                                    style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                <h5 class=" mt-[10px] text-[20px] font-semibold tracking-tight text-gray-900  text-center">
                                    {{ $item->title }} </h5>
                                <p
                                    class="font-normal mt-[10px] 2xl:mb-0 mb-[23px] leading-normal md:mx-[40px] mx-[30px] text-[14px] text-center">

                                    {!! $item->first_para !!}
                                </p>
                            </a>
                        @endforeach
                    @endif



                </div>
            </div>
            <!-- benifit card section end-->
        </div>
        <!-- Benifit section end -->
        <!-- Featured story start -->
        <section class="mt-[100px]">
            <div>
                <h1 class="text-[50px] font-bold text-center md:leading-normal leading-[50px]  text-[#212427]">
                    @if ($home !== null)
                        {{ $home->feature_title }}
                    @endif
                </h1>
                <p class="text-center text-[24px] font-normal">
                    @if ($home !== null)
                        {{ $home->feature_subtitle }}
                    @endif
                </p>
            </div>

            @if ($featureStory->count() > 0)
                @foreach ($featureStory->slice(0, 1) as $firstfeature)
                    <a href="{{ route('single-story', $firstfeature->id) }}">
                        <div class="2xl:w-[1320px] xl:mx-auto lg:mx-5 mt-[20px] grid grid-cols-1 lg:grid-cols-5">
                            <div class="col-span-2">
                                <div class="md:mx-0 mx-5">
                                    <img src="{{ Storage::url($firstfeature->feature_img) }}" alt=""
                                        class="h-[316px] xl:w-[561px] w-full">
                                </div>
                                {{-- <div class="absolute xl:ml-10 lg:ml-[20px] md:ml-[250px] ml-[60px] mt-[-178px]"
                                    style="">
                                    <h1
                                        class=" text-white xl:w-[460px] lg:w-[390px] md:w-[500px] w-[280px]  xl:text-[50px] md:text-[50px] text-[30px] lg:text-[40px] leading-[63.25px] font-black">

                                        {!! $firstfeature->feature_title !!}
                                    </h1>
                                    <p>{!! $firstfeature->feature_para !!}</p>

                                </div> --}}
                            </div>
                            <div class="col-span-3 lg:ml-5 ml-0 2xl:ml-0">

                                <div class="2xl:ml-6 xl:mx-0 2xl:mx-0 xl:mr-5 2xl:mr-0 lg:mx-0 mx-5">
                                    <p class=" font-normal h-[220px] overflow-hidden text-base text-[#212427] text-justify">
                                        {!! $firstfeature->description !!} </p>
                                    <div class="flex">
                                        <img src="/storage/{{$firstfeature->image}}" alt=""
                                            class="h-[52px] w-[52px] mt-[24px] ">
                                        <div class="mt-[24px] ml-[5px]">
                                            <h1 class="text-[20px] font-semibold text-[#212427]">
                                                {{ $firstfeature->name }}.
                                            </h1>
                                            <p class=" text-[14px] tracking-wider font-normal">
                                                {{ $firstfeature->profession }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif

            @if ($featureStory->count() > 0)
                @foreach ($featureStory->slice(1, 1) as $secondfeture)
                    <a href="{{ route('single-story', $secondfeture->id) }}">
                        <div class="mt-6 flex flex-col-reverse lg:grid grid-cols-1  lg:grid-cols-5 2xl:w-[1320px] mx-auto">

                            <div class="col-span-3 2xl:mx-0 xl:mx-5 mx-5">
                                <div class="2xl:mr-2">
                                    <p class=" font-normal h-[220px] overflow-hidden text-[16px] text-justify">
                                        {!! $secondfeture->description !!} </p>
                                    <div class="flex">
                                        <img src="/storage/{{$secondfeture->image}}" alt=""
                                            class="h-[52px] w-[52px] mt-[24px]">
                                        <div class="mt-[24px] ml-3">
                                            <h1 class="text-[20px] font-semibold text-[#212427]"> {{ $secondfeture->name }}
                                            </h1>
                                            <p class=" text-[14px]  font-normal"> {{ $secondfeture->profession }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 md:mx-0 mx-5 2xl:ml-4 2xl:mr-0 lg:mr-5">

                                <img src="{{ Storage::url($secondfeture->feature_img) }}" alt=""
                                    class="h-[316px] w-full lg:w-[561px]">
                                {{-- <div class="absolute ml-[20px] md:ml-[200px] xl:ml-[20px] lg:ml-[0px] mt-[-180px]"
                                    style="">
                                    <h1
                                        class=" text-white md:w-[500px] lg:w-[400px] w-[300px] xl:w-[480px] xl:text-[50px] md:text-[50px] text-[30px] lg:text-[40px] leading-[63.25px] font-black text-center">
                                        {!! $secondfeture->feature_title !!} </h1>
                                    </h1>
                                    <p class="text-white md:w-[500px] lg:w-[400px] w-[300px] xl:w-[480px] xl:text-[50px] md:text-[50px] text-[30px] lg:text-[40px] leading-[63.25px] font-black text-center"
                                    > {!! $secondfeture->feature_para !!}</p>
                                </div> --}}
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif


        </section>
        <!-- Featured story end -->
        <!-- Popular story start -->
        <section class="mt-[100px] pbg" style="">
            <div>
                <h1 class="text-[50px] font-bold text-center text-[#212427]">
                    @if ($home !== null)
                        {{ $home->story_title }}
                    @endif
                </h1>
                <p class="text-center mx-5 font-normal text-2xl">
                    @if ($home !== null)
                        {{ $home->story_subtitle }}
                    @endif
                </p>
            </div>
            <div
                class="2xl:w-[1320px] overflow-y-hidden 2xl:mx-auto mx-5 gap-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-[20px]">


                @if ($popularStory->count() > 0)
                    {{-- @dd($popularStory) --}}
                    @foreach ($popularStory as $pStory)
                        <div class="pb-5 xl:pb-0 bg-white border border-gray-200 rounded-lg shadow">
                            <a href="{{ route('single-story', $pStory->id) }}">
                                <img class=" xl:h-[424px] w-full" src="{{ Storage::url($pStory->image) }}"
                                    alt="" />
                            </a>
                            <div class="px-[22px] pt-[20px] xl:h-[516px]">
                                <a href="#">
                                    <h5 class="mb-2 text-[20px] font-bold tracking-tight text-[#212427]">"
                                        {!! $pStory->title !!}
                                        "</h5>
                                </a>
                                <p class="mt-[20px] text-[14px] font-normal text-[#212427] text-justify">
                                    {!! Str::limit($pStory->description, 584) !!}
                                </p>
                                <a href="{{ route('single-story', $pStory->id) }}"
                                    class="text-[#D1052C] text-[16px] font-bold">
                                    Read more
                                </a>
                                <h1 class="text-[20px] font-semibold mt-[20px]"> {{ $pStory->name }} <h1>
                                        <p class="text-[14px] font-normal">{{ $pStory->profession }}</p>
                                        <p class="text-[14px] font-normal md:mb-0 mb-[20px]">{{ $pStory->city }} ,
                                            {{ $pStory->country->country }}
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
            <h1 class="text-[50px] font-bold text-center text-[#D1052C]">
                @if ($storyCount !== null)
                    {{ number_format($storyCount) }}
                @endif
            </h1>

            <p class="text-center font-normal text-2xl">
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
                    <div class="lg:mx-0 mx-5">
                        <img src="{{ '/storage/' . $home->lgImage }}" alt="" class="lg:h-[791px] lg:w-[845px]">
                    </div>
                @endif
            </div>
            <a href="{{ route('community') }}" class=" flex justify-center items-center"><button
                    class="lg:w-48 mt-5 p-3 rounded-lg font-bold text-base  bg-[#D1052C] text-white">Read All
                    Stories</button></a>
        </section>
        <!-- successfull story Candidate end -->

        <!-- Get Service Start -->
        <section class="mt-[163px]">
            <h1 class="text-center text-[50px] mx-5 md:leading-0 leading-[60px] font-bold text-[#212427]">
                @if ($home !== null)
                    {{ $home->service_title }}
                @endif
            </h1>
            <p class="text-center font-normal mx-5 text-[24px] leading-normal">
                @if ($home !== null)
                    {{ $home->service_subtitle }}
                @endif
            </p>
            <div class="2xl:w-[1320px] xl:mx-20 2xl:mx-auto mt-10 grid md:grid-cols-2 gap-6 xl:gap-0 xl:grid-cols-7">


                @if ($services->count() > 0)
                    @foreach ($services as $item)
                        <div class="mr-[27px] ">
                            <div class="flex justify-center items-center"><img src="{{ asset($item->image) }}"
                                    alt="" class="w-[100px] h-[100px]" /></div>
                            <h1 class="font-semibold text-xl xl:w-[160px] text-center "> {{ $item->title }} </h1>
                            <p class="text-center xl:-mx-24 lg:mx-10  text-base font-normal"> {!! $item->description !!}
                            </p>
                        </div>
                        @if (!$loop->last)
                            <div class="mt-16 horizontal">
                                <hr class="border w-[193px] xl:visible -mt-[15px] bg-[#D9D9D9]">
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </section>
        <!-- Get Service end -->


        <div class="mt-[100px] mbg" style="">
            <!-- What our member say => Component: Testimonial slider  -->
            <h1 class="font-bold text-[50px] mx-5  leading-[60px] text-[#212427] text-center">
                @if ($home !== null)
                    {{ $home->customer_title }}
                @endif
            </h1>
            <p class="text-2xl font-normal mx-5 text-center text-[#212427]">
                @if ($home !== null)
                    {{ $home->customer_subtitle }}
                @endif
            </p>

            {{-- This slider for 1 items per slides  --}}
            <div class="relative 2xl:w-[1320px] mx-auto glide-01 ">
                <!-- Slides -->
                <div class="overflow-hidden text-center rounded " data-glide-el="track">
                    <ul
                        class="relative overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                        @foreach ($member_says as $item)
                            <li>
                                <div class="w-full">
                                    <!-- Start Testimonial -->
                                    <div class="overflow-hidden ">
                                        <div class="relative">
                                            <figure class="relative z-10">
                                                <blockquote class=" text-lg leading-loose lg:text-xl">
                                                    <div
                                                        class=" 2xl:mx-auto mx-5 grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
                                                        {{-- @foreach ($items as $item) --}}
                                                        <a href="javascript:void(0)"
                                                            class=" lg:h-[304px] 2xl:w-[424px] px-2 py-2 mt-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  overflow-hidden">
                                                            <div class="flex">
                                                                <div>
                                                                    <img src="{{ '/storage/' . $item->image }}"
                                                                        alt=""
                                                                        class="h-[103px] w-[103px] rounded-full ml-[17px]"
                                                                        style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                                                    <svg class="ml-[17px] my-[5px]" width="28"
                                                                        height="23" viewBox="0 0 28 23" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.952 0.511997L7.728 15.872L6.32 10.112C8.15467 10.112 9.648 10.6453 10.8 11.712C11.952 12.7787 12.528 14.2507 12.528 16.128C12.528 17.9627 11.9307 19.456 10.736 20.608C9.584 21.7173 8.13333 22.272 6.384 22.272C4.592 22.272 3.09867 21.7173 1.904 20.608C0.752 19.456 0.176 17.9627 0.176 16.128C0.176 15.5733 0.218667 15.04 0.304 14.528C0.389333 13.9733 0.56 13.3333 0.816 12.608C1.072 11.8827 1.43467 10.9227 1.904 9.728L5.616 0.511997H11.952ZM27.056 0.511997L22.832 15.872L21.424 10.112C23.2587 10.112 24.752 10.6453 25.904 11.712C27.056 12.7787 27.632 14.2507 27.632 16.128C27.632 17.9627 27.0347 19.456 25.84 20.608C24.688 21.7173 23.2373 22.272 21.488 22.272C19.696 22.272 18.2027 21.7173 17.008 20.608C15.856 19.456 15.28 17.9627 15.28 16.128C15.28 15.5733 15.3227 15.04 15.408 14.528C15.4933 13.9733 15.664 13.3333 15.92 12.608C16.176 11.8827 16.5387 10.9227 17.008 9.728L20.72 0.511997H27.056Z"
                                                                            fill="#212427" />
                                                                    </svg>

                                                                </div>
                                                                <div class="ml-[14px] mt-[20px]">
                                                                    <h1 class="text-[28px] font-semibold">
                                                                        {{ $item->name }} </h1>
                                                                    <p class="font-normal absolute text-[20px]">
                                                                        {{ $item->profession }} </p>
                                                                </div>
                                                            </div>
                                                            <p class="font-normal mx-[17px] text-justify text-base pb-5">
                                                                {!! Str::limit($item->description, 235) !!}
                                                            </p>
                                                        </a>
                                                        {{-- @endforeach --}}

                                                    </div>
                                                </blockquote>

                                            </figure>

                                        </div>
                                    </div>
                                    <!-- End Testimonial -->
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Indicators -->
                <div class="flex items-center justify-center w-full  pt-2" data-glide-el="controls[nav]">
                    <button class="p-2 group" data-glide-dir="=0" aria-label="goto slide 1"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2 bg-[#D9D9D9] ring-[#D9D9D9]  focus:outline-none"></span></button>
                    <button class="p-2 group" data-glide-dir="=1" aria-label="goto slide 2"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2  bg-[#D9D9D9] ring-[#D9D9D9] focus:outline-none"></span></button>
                    <button class="p-2 group" data-glide-dir="=2" aria-label="goto slide 3"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2  bg-[#D9D9D9] ring-[#D9D9D9] focus:outline-none"></span></button>
                </div>
            </div>

            {{-- This slider for 2 items per slides  --}}
            <div class="relative 2xl:w-[1320px] mx-auto glide-02">
                <!-- Slides -->
                <div class="overflow-hidden text-center rounded " data-glide-el="track">
                    <ul
                        class="relative tab w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">

                        @foreach ($member_says->chunk(2) as $items)
                            <li>
                                <div class="w-full">
                                    <!-- Start Testimonial -->
                                    <div class="overflow-hidden ">
                                        <div class="relative">
                                            <figure class="relative z-10">
                                                <blockquote class=" text-lg leading-loose lg:text-xl">
                                                    <div
                                                        class=" 2xl:mx-auto mx-5 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mt-10">
                                                        @foreach ($items as $item)
                                                            <a href="javascript:void(0)"
                                                                class=" lg:h-[304px] 2xl:w-[424px] px-2 py-2 mt-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  overflow-hidden">
                                                                <div class="flex">
                                                                    <div>
                                                                        <img src="{{ '/storage/' . $item->image }}"
                                                                            alt=""
                                                                            class="h-[103px] w-[103px] rounded-full ml-[17px]"
                                                                            style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                                                        <svg class="ml-[17px] my-[5px]" width="28"
                                                                            height="23" viewBox="0 0 28 23"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M11.952 0.511997L7.728 15.872L6.32 10.112C8.15467 10.112 9.648 10.6453 10.8 11.712C11.952 12.7787 12.528 14.2507 12.528 16.128C12.528 17.9627 11.9307 19.456 10.736 20.608C9.584 21.7173 8.13333 22.272 6.384 22.272C4.592 22.272 3.09867 21.7173 1.904 20.608C0.752 19.456 0.176 17.9627 0.176 16.128C0.176 15.5733 0.218667 15.04 0.304 14.528C0.389333 13.9733 0.56 13.3333 0.816 12.608C1.072 11.8827 1.43467 10.9227 1.904 9.728L5.616 0.511997H11.952ZM27.056 0.511997L22.832 15.872L21.424 10.112C23.2587 10.112 24.752 10.6453 25.904 11.712C27.056 12.7787 27.632 14.2507 27.632 16.128C27.632 17.9627 27.0347 19.456 25.84 20.608C24.688 21.7173 23.2373 22.272 21.488 22.272C19.696 22.272 18.2027 21.7173 17.008 20.608C15.856 19.456 15.28 17.9627 15.28 16.128C15.28 15.5733 15.3227 15.04 15.408 14.528C15.4933 13.9733 15.664 13.3333 15.92 12.608C16.176 11.8827 16.5387 10.9227 17.008 9.728L20.72 0.511997H27.056Z"
                                                                                fill="#212427" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="ml-[14px] mt-[20px]">
                                                                        <h1 class="text-[28px] font-semibold">
                                                                            {{ $item->name }} </h1>
                                                                        <p class="font-normal absolute text-[20px]">
                                                                            {{ $item->profession }} </p>
                                                                    </div>
                                                                </div>
                                                                <p
                                                                    class="font-normal mx-[17px] text-justify text-base pb-5">
                                                                    {!! Str::limit($item->description, 235) !!}
                                                                </p>
                                                            </a>
                                                        @endforeach

                                                    </div>
                                                </blockquote>

                                            </figure>

                                        </div>
                                    </div>
                                    <!-- End Testimonial -->
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <!-- Indicators -->
                <div class="flex items-center justify-center w-full  pt-2" data-glide-el="controls[nav]">
                    <button class="p-2 group" data-glide-dir="=0" aria-label="goto slide 1"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2 bg-[#D9D9D9] ring-[#D9D9D9]  focus:outline-none"></span></button>
                    <button class="p-2 group" data-glide-dir="=1" aria-label="goto slide 2"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2  bg-[#D9D9D9] ring-[#D9D9D9] focus:outline-none"></span></button>
                    <button class="p-2 group" data-glide-dir="=2" aria-label="goto slide 3"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2  bg-[#D9D9D9] ring-[#D9D9D9] focus:outline-none"></span></button>
                </div>
            </div>

            {{-- This slider for 2 items per slides  --}}
            <div class="relative 2xl:w-[1320px] mx-auto glide-03">
                <!-- Slides -->
                <div class="overflow-hidden text-center rounded " data-glide-el="track">
                    <ul
                        class="relative tab w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">

                        @foreach ($member_says->chunk(3) as $items)
                            <li>
                                <div class="w-full">
                                    <!-- Start Testimonial -->
                                    <div class="overflow-hidden ">
                                        <div class="relative">
                                            <figure class="relative z-10">
                                                <blockquote class=" text-lg leading-loose lg:text-xl">
                                                    <div
                                                        class=" 2xl:mx-auto mx-5 grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
                                                        @foreach ($items as $item)
                                                            <a href="javascript:void(0)"
                                                                class=" lg:h-[304px] 2xl:w-[424px] px-2 py-2 mt-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  overflow-hidden">
                                                                <div class="flex">
                                                                    <div>
                                                                        <img src="{{ '/storage/' . $item->image }}"
                                                                            alt=""
                                                                            class="h-[103px] w-[103px] rounded-full ml-[17px]"
                                                                            style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                                                                        <svg class="ml-[17px] my-[5px]" width="28"
                                                                            height="23" viewBox="0 0 28 23"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M11.952 0.511997L7.728 15.872L6.32 10.112C8.15467 10.112 9.648 10.6453 10.8 11.712C11.952 12.7787 12.528 14.2507 12.528 16.128C12.528 17.9627 11.9307 19.456 10.736 20.608C9.584 21.7173 8.13333 22.272 6.384 22.272C4.592 22.272 3.09867 21.7173 1.904 20.608C0.752 19.456 0.176 17.9627 0.176 16.128C0.176 15.5733 0.218667 15.04 0.304 14.528C0.389333 13.9733 0.56 13.3333 0.816 12.608C1.072 11.8827 1.43467 10.9227 1.904 9.728L5.616 0.511997H11.952ZM27.056 0.511997L22.832 15.872L21.424 10.112C23.2587 10.112 24.752 10.6453 25.904 11.712C27.056 12.7787 27.632 14.2507 27.632 16.128C27.632 17.9627 27.0347 19.456 25.84 20.608C24.688 21.7173 23.2373 22.272 21.488 22.272C19.696 22.272 18.2027 21.7173 17.008 20.608C15.856 19.456 15.28 17.9627 15.28 16.128C15.28 15.5733 15.3227 15.04 15.408 14.528C15.4933 13.9733 15.664 13.3333 15.92 12.608C16.176 11.8827 16.5387 10.9227 17.008 9.728L20.72 0.511997H27.056Z"
                                                                                fill="#212427" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="ml-[14px] mt-[20px]">
                                                                        <h1 class="text-[28px] font-semibold">
                                                                            {{ $item->name }} </h1>
                                                                        <p class="font-normal absolute text-[20px]">
                                                                            {{ $item->profession }} </p>
                                                                    </div>
                                                                </div>
                                                                <p
                                                                    class="font-normal mx-[17px] text-justify text-base pb-5">
                                                                    {!! Str::limit($item->description, 235) !!}
                                                                </p>
                                                            </a>
                                                        @endforeach

                                                    </div>
                                                </blockquote>

                                            </figure>

                                        </div>
                                    </div>
                                    <!-- End Testimonial -->
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <!-- Indicators -->
                <div class="flex items-center justify-center w-full  pt-2" data-glide-el="controls[nav]">
                    <button class="p-2 group" data-glide-dir="=0" aria-label="goto slide 1"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2 bg-[#D9D9D9] ring-[#D9D9D9]  focus:outline-none"></span></button>
                    <button class="p-2 group" data-glide-dir="=1" aria-label="goto slide 2"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2  bg-[#D9D9D9] ring-[#D9D9D9] focus:outline-none"></span></button>
                    <button class="p-2 group" data-glide-dir="=2" aria-label="goto slide 3"><span
                            class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2  bg-[#D9D9D9] ring-[#D9D9D9] focus:outline-none"></span></button>
                </div>
            </div>
            <!--  What our member say => Component: Testimonial slider -->

            <!-- last section start -->
            <section class="mt-[100px] mb-[-100px]"
                style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:0 120px;">
                <div class="pb-20 py-28 "
                    style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;background-position:0 30px">
                    <div class="pb-[60px] pt-[70px]" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
                        <h1 class="font-bold text-[50px] text-[#212427] md:leading-normal leading-[50px] text-center">
                            @if ($home !== null)
                                {!! $home->share_title !!}
                            @endif
                        </h1>

                        <p class="text-xl text-center mx-5 text-[#D1052C]">
                            @if ($home !== null)
                                {!! $home->share_subtitle !!}
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
                                        class="lg:w-48 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
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
        {{-- <script src="{{asset('js/jquery.js')}}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

        <script>
            var widthn = window.screen.width;

            if (widthn < 769) {
                $('.glide-02,.glide-03').remove();
                var sliderMount = new Glide('.glide-01', {
                    type: 'slider',
                    focusAt: 'center',
                    perView: 1,
                    autoplay: 5000,
                    animationDuration: 700,
                    gap: 0,
                    classes: {
                        activeNav: '[&>*]:bg-[#D1052C]',
                    },
                });
            } else if (widthn > 768 && widthn < 1100) {
                $('.glide-01,.glide-03').remove();
                var sliderMount = new Glide('.glide-02', {
                    type: 'slider',
                    focusAt: 'center',
                    perView: 1,
                    autoplay: 5000,
                    animationDuration: 700,
                    gap: 0,
                    classes: {
                        activeNav: '[&>*]:bg-[#D1052C]',
                    },
                });
            } else {
                $('.glide-01,.glide-02').remove();
                var sliderMount = new Glide('.glide-03', {
                    type: 'slider',
                    focusAt: 'center',
                    perView: 1,
                    autoplay: 5000,
                    animationDuration: 700,
                    gap: 0,
                    classes: {
                        activeNav: '[&>*]:bg-[#D1052C]',
                    },
                });
            }
            sliderMount.mount();
        </script>

        <!-- flowbite cdn -->
        {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
        <!-- flowbite cdn end -->
    @endpush
