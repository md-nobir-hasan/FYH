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
            style="background:url(/images/benifitbg.png);background-size:100% 392px;background-repeat:no-repeat; ">
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
                        <a href="{{route('benefit.details',[$item->id])}}"
                            class=" w-[424px] h-[234px]  bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                            <img src="{{ '/storage/' . $item->image }}" alt="{{ $item->title }}"
                                class="h-20 w-20 mx-auto mt-[16px] rounded-full"
                                style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                            <h5
                                class="mb-[10px] mt-[10px] text-[20px] font-semibold tracking-tight text-gray-900  text-center">
                                {{ $item->title }} </h5>
                            <p class="font-normal leading-normal mx-[40px] text-[14px] text-center">
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
                <p class="text-center text-[24px] font-normal">
                    @if ($home !== null)
                        {{ $home->feature_subtitle }}
                    @endif
                </p>
            </div>

            @if ($featureStory->count() > 0)
                @foreach ($featureStory->slice(0, 1) as $firstfeature)
                    <a href="{{route('single-story',$firstfeature->id)}}">
                        <div class="w-[1320px] mx-auto mt-[20px] grid grid-cols-1 lg:grid-cols-5">
                            <div class="col-span-2">
                                @php
                                    $title = $firstfeature->title;
                                @endphp
                                {{-- @dd($firstfeature) --}}
                                <img src="{{ Storage::url($firstfeature->feature_img) }}" alt=""
                                    class="h-[316px] w-[561px]">
                                <div class="absolute ml-[70px] mt-[-178px]" style="">
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
                                        <img src="/storage/image/ellipse.png" alt=""
                                            class="h-[52px] w-[52px] mt-[24px] ">
                                        <div class="mt-[24px] ml-[5px]">
                                            <h1 class="text-[20px] font-semibold text-[#212427]"> {{ $firstfeature->name }}.
                                            </h1>
                                            <p class="capitalize text-[14px] tracking-wider font-normal">
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
                   <a href="{{route('single-story',$secondfeture->id)}}">
                    <div class="mt-6 grid grid-cols-1 lg:grid-cols-5 w-[1320px] mx-auto">

                        <div class="col-span-3">
                            <div>
                                <p class=" font-normal text-[16px] text-justify"> {!! $secondfeture->description !!} </p>
                                <div class="flex">
                                    <img src="{{ storage::url('image/ellipse.png') }}" alt=""
                                        class="h-[52px] w-[52px] mt-[24px]">
                                    <div class="mt-[24px] ml-3">
                                        <h1 class="text-[20px] font-semibold text-[#212427]"> {{ $secondfeture->name }}
                                        </h1>
                                        <p class="capitalize text-[14px] font-normal"> {{ $secondfeture->profession }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 ml-4">
                            @php
                                $title = str_split($secondfeture->title, 15);
                            @endphp
                            <img src="{{ Storage::url($secondfeture->feature_img) }}" alt=""
                                class="h-[316px] w-[561px]">
                            <div class="absolute ml-[80px] mt-[-140px]" style="">
                                <h1 class=" text-white text-5xl font-black text-center"> {!! $secondfeture->title !!} </h1>
                                </h1>
                            </div>
                        </div>
                    </div>
                   </a>
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
                        <div class=" bg-white border border-gray-200 rounded-lg shadow ">
                            <a href="{{ route('single-story', $pStory->id) }}">
                                <img class=" lg:h-[424px] w-full" src="{{ Storage::url($pStory->image) }}"
                                    alt="" />
                            </a>
                            <div class="px-[22px] pt-[20px] h-[516px]">
                                <a href="#">
                                    <h5 class="mb-2 text-[20px] font-bold tracking-tight text-[#212427]">"
                                        {!! $pStory->title !!}
                                        "</h5>
                                </a>
                                <p class="mt-[20px] text-[14px] font-normal text-[#212427] text-justify">
                                    {!! Str::limit($pStory->description, 595) !!}
                                </p>
                                <a href="{{ route('single-story', $pStory->id) }}"
                                    class="text-[#D1052C] text-[16px] font-bold">
                                    Read more
                                </a>
                                <h1 class="text-[20px] font-semibold mt-[20px]"> {{ $pStory->name }} <h1>
                                        <p class="capitalize text-[14px] font-normal">{{ $pStory->profession }}</p>
                                        <p class="capitalize text-[14px] font-normal">{{ $pStory->city }} ,
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
            <p class="text-center font-normal capitalize text-[24px] leading-normal">
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
        <div class="mt-[100px]"
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

            <!-- Component: Testimonial slider -->
            <div class="relative w-[1320px] mx-auto glide-08">
                <!-- Slides -->
                <div class="overflow-hidden text-center rounded " data-glide-el="track">
                    <ul
                        class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                        @foreach ($member_says->chunk(3) as $items)
                            <li>
                                <div class="w-full">
                                    <!-- Start Testimonial -->
                                    <div class="overflow-hidden ">
                                        <div class="relative">
                                            <figure class="relative z-10">
                                                <blockquote class=" text-lg leading-loose lg:text-xl">
                                                    <div class=" mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10">
                                                        @foreach ($items as $item)
                                                            <a href="javascript:void(0)"
                                                                class=" h-[304px] w-[424px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  overflow-hidden">
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
                                                                <p class="font-normal mx-[17px] text-justify text-base">
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


            <!-- End Testimonial slider -->

            <!-- Success section end -->
            <!-- last section start -->
            <section class="mt-[100px] mb-[-100px]"
                style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
                <div
                    class="pb-10 py-28 "style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;">
                    <div class="pb-14 shadow-lg">
                        <h1 class="font-bold text-[50px] text-[#212427] text-center">
                            @if ($home !== null)
                                {!! $home->share_title !!}
                            @endif
                        </h1>

                        <p class="text-xl text-center text-[#D1052C] capitalize">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

        <script>
            var glide07 = new Glide('.glide-08', {
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

            glide07.mount();
        </script>

        <!-- flowbite cdn -->
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <!-- flowbite cdn end -->
    @endpush
