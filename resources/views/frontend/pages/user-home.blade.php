@extends('frontend.layout.app')
@push('title')
    User Home
@endpush
@section('content')
    <style>
        .mbg {
            background: url(/images/benifitbg.png);
            background-size: 100% 387px;
            background-repeat: no-repeat;
            background-position: 0 125px
        }

        @media (min-width: 0px) and (max-width: 1023px) {
            .mbg {
                background: none
            }
        }
    </style>
    <div class=" mt-[86px]" style="font-family:'Poppins'">
        <div class="2xl:w-[1320px] 2xl:mx-auto xl:mx-20 mx-5">
            <h1 class="text-[50px] font-bold ">Hi <span class="capitalize">{{ $user->fname }}</span>,</h1>
            <p class="text-2xl font-semibold">What’s popular now</p>
        </div>
        <!-- card section -->
        <section class="mt-5 grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 2xl:w-[1320px] 2xl:mx-auto xl:mx-20 mx-5 gap-6">
            @foreach ($fs_story as $story)
                    <div class="w-full bg-white border border-gray-200 rounded-lg shadow">

                        <img src="{{ '/storage/' . $story->feature_img }}" alt="" class="h-[238px] w-full 2xl:w-[424px]">

                        {{-- <div class="absolute mt-[-120px] ml-[80px]">
                            @php   $title = str_split($story->title, 10)      @endphp
                            @foreach ($title as $key => $item)
                                @if ($key == 2)
                                @break
                            @endif

                            <h1
                                class=" text-white text-4xl font-black @if ($key == 1) ml-[0px] @endif ">
                                {{ $item }} </h1>
                        @endforeach


                    </div> --}}
                    <div class="p-3">
                        <div class="flex">
                            {{-- <img src="{{ $story->img }}" alt="" class="mt-[-40px]"> --}}
                            <img src="/storage/{{$story->image}}" class="mt-[-20px]" height="65px" width="65px" />
                            <div class="ml-3">
                                <h1 class="text-xl font-semibold mt-[-5px]"> {{ $story->name }} </h1>
                                <p class="text-sm font-normal text-[#848484]"> {{ $story->profession }} </p>
                            </div>
                        </div>
                        <p class="mt-2">
                            {{ Str::limit($story->description, 250) }}
                        </p>
                    </div>

                </div>
            @endforeach



    </section>
    <!-- successfull section start -->
    <section class=" mt-[100px]"
        style="background:url(/images/successbg.png);background-size:100%;background-repeat:no-repeat; background-position:0 50%">
        <h1 class="text-[50px] font-bold text-center text-[#D1052C]"> {{ $storyCount }} </h1>
        <p class="text-center uppercase font-normal text-2xl">
            @if ($shareImage !== null)
                {{ $shareImage->image_title }}
            @endif
        </p>
        @php   $subtitle = str_split($shareImage->image_subtitle, 45)         @endphp
        <p class="text-center font-normal text-sm">
            @if ($shareImage !== null)
                @foreach ($subtitle as $item)
                    {{ $item }} <br>
                @endforeach
            @endif
        </p>
        <div class="flex items-center justify-center mt-5 2xl:mx-0 mx-5">
            <img src="{{ '/storage/' . $shareImage->lgImage }}" alt="" class="lg:h-[791px] lg:w-[845px]">
        </div>
        <a href="{{ route('community') }}" class=" flex justify-center items-center"><button
                class="lg:w-48 mt-5 p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Read The Stories</button></a>
    </section>
    <!-- successfull section end -->

    <!-- review section start -->
    <div class="mt-[100px] mbg">
        <h1 class="font-bold text-[50px] mx-5  leading-[60px] text-[#212427] text-center">
            @if ($shareImage !== null)
                {{ $shareImage->customer_title }}
            @endif
        </h1>
        <p class="text-2xl font-normal mx-5 text-center text-[#212427]">
            @if ($shareImage !== null)
                {{ $shareImage->customer_subtitle }}
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
                                                        class=" h-[304px] 2xl:w-[424px] px-2 py-2 mt-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  overflow-hidden">
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
                                                    class=" 2xl:mx-auto mx-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                                                    @foreach ($items as $item)
                                                        <a href="javascript:void(0)"
                                                            class=" h-[304px] 2xl:w-[424px] px-2 py-2 mt-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  overflow-hidden">
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
                                                            class=" h-[304px] 2xl:w-[424px] px-2 py-2 mt-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100  overflow-hidden">
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
    </div>
    <!-- review section end -->


    <!-- Time section start -->
    <section class="mt-[100px] lg:mx-20 2xl:mx-0"
        style="background:url(/images/successbg.png);background-size:100%;background-repeat:no-repeat; background-position:0 50%">
        <form action="{{ route('feedback') }}" method="post"
            class="2xl:w-[1320px] mx-auto bg-white mb-[-150px] border shadow-xl">
            @csrf
            <h1 class="text-center text-[50px] leading-normal mt-5 font-bold capitalize ">
                @if ($shareImage !== null)
                    {{ $shareImage->reaction_heading }}
                @endif
            </h1>
            <p class="text-center text-[24px] font-[400]">
                @if ($shareImage !== null)
                    {{ $shareImage->reaction_titleOne }}
                @endif
            </p>
            <div
                class="2xl:mx-[292px] xl:mx-56 mx-[60px] lg:mx-36 md:mx-24 mt-[10px] grid grid-cols-2 md:grid-cols-5 gap-10">
                <div id="nreaction" class="hidden">

                </div>
                <div onclick=function1() id="btn1" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">

                    <img src="/images/Terrible.png" alt="" class="p-5" />

                </div>

                <div onclick=function2() id="btn2" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">

                    <img src="/images/Bad.png" alt="" class="p-5" />

                </div>


                <div onclick=function3() id="btn3" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                    <img src="/images/Okay.png" alt="" class="p-5" />

                </div>


                <div onclick=function4() id="btn4" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                    <img src="/images/Good.png" alt="" class="p-5" />
                </div>


                <div onclick=function5() id="btn5" class=" border h-28 w-24 shadow-lg hover:shadow-2xl">
                    <img src="/images/amazing.png" alt="" class="p-5" />

                </div>
            </div>
            <h1 class="text-center font-semibold mt-4 text-[18px] leading-normal">
                @if ($shareImage !== null)
                    {{ $shareImage->reaction_titleTwo }}
                @endif
            </h1>

            <div class="lg:mx-48 md:mx-20 mx-5 mt-2">
                <textarea id="message" name="description" rows="4"
                    class="block p-2.5 w-full text-sm shadow-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Left Your Feedback here..."></textarea>
            </div>
            <div class="mt-2 flex justify-center items-center mb-10">
                <button type="submit" class="bg-[#D1052C] text-white px-6 py-2 rounded">Submit</button>
            </div>
        </form>
    </section>
    <!-- Time section end -->
</div>
@endsection
@push('js')
<script>
    let btn1 = document.getElementById("btn1")
    let btn2 = document.getElementById("btn2")
    let btn3 = document.getElementById("btn3")
    let btn4 = document.getElementById("btn4")
    let btn5 = document.getElementById("btn5")

    const function1 = () => {
        if (btn1.style.backgroundColor === '' || btn2.style.backgroundColor || btn3.style.backgroundColor || btn4
            .style.backgroundColor || btn5.style.backgroundColor) {
            btn1.style.backgroundColor = '#F6CDD5';
            btn2.style.backgroundColor = ''
            btn3.style.backgroundColor = ''
            btn4.style.backgroundColor = ''
            btn5.style.backgroundColor = ''
            $('#nreaction').html(`<input name='reaction' value='teriable'>`);
        } else {
            btn1.style.backgroundColor = '';
            $('#nreaction').html(``);
        }

    }
    const function2 = () => {

        if (btn2.style.backgroundColor === '' || btn1.style.backgroundColor || btn3.style.backgroundColor || btn4
            .style.backgroundColor || btn4.style.backgroundColor) {
            btn2.style.backgroundColor = '#F6CDD5';
            btn1.style.backgroundColor = '';
            btn3.style.backgroundColor = '';
            btn4.style.backgroundColor = ''
            btn5.style.backgroundColor = ''
            $('#nreaction').html(`<input name='reaction' value='bad'>`);
        } else {
            btn2.style.backgroundColor = ''
        }
    }
    const function3 = () => {
        if (btn3.style.backgroundColor === '' || btn1.style.backgroundColor || btn2.style.backgroundColor || btn4
            .style.backgroundColor || btn5.style.backgroundColor) {
            btn3.style.backgroundColor = '#F6CDD5';
            btn1.style.background = ''
            btn2.style.backgroundColor = ''
            btn4.style.backgroundColor = ''
            btn5.style.backgroundColor = ''
            $('#nreaction').html(`<input name='reaction' value='oky'>`);
        } else {
            btn3.style.backgroundColor = '';
            $('#nreaction').html(``);
        }
    }
    const function4 = () => {

        if (btn4.style.backgroundColor === '' || btn1.style.backgroundColor || btn2.style.backgroundColor || btn3
            .style.backgroundColor || btn5.style.backgroundColor) {
            btn4.style.backgroundColor = '#F6CDD5';
            btn1.style.backgroundColor = ''
            btn2.style.backgroundColor = ''
            btn3.style.backgroundColor = ''
            btn5.style.backgroundColor = ''
            $('#nreaction').html(`<input name='reaction' value='good'>`);
        } else {
            btn4.style.backgroundColor = '';
            $('#nreaction').html(``);
        }
    }
    const function5 = () => {

        if (btn5.style.backgroundColor === '' || btn1.style.backgroundColor || btn2.style.backgroundColor || btn3
            .style.backgroundColor || btn4.style.backgroundColor) {
            btn5.style.backgroundColor = '#F6CDD5';
            btn1.style.backgroundColor = '';
            btn2.style.backgroundColor = '';
            btn3.style.backgroundColor = '';
            btn4.style.backgroundColor = '';
            $('#nreaction').html(`<input name='reaction' value='amazing'>`);
        } else {
            btn5.style.backgroundColor = '';
            $('#nreaction').html(``);
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

{{-- <script>
    var glide07 = new Glide('.glide-08', {
        type: 'slider',
        focusAt: 'center',
        perView: 1,
        autoplay: 3500,
        animationDuration: 700,
        gap: 0,
        classes: {
            activeNav: '[&>*]:bg-[#D1052C]',
        },
    });

    glide07.mount();
</script> --}}
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
@endpush
