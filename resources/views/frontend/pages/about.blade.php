@extends('frontend.layout.app')
@push('title')
    About
@endpush
@section('content')
    <style>
        iframe {
            width: 1320px ;
            height: 741px ;
            margin: auto;
            border-radius: 10px;
            padding: 10px;
            background: #ECF9FF;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .abg{
            background:url('/images/benifitbg.png');background-size:100% 486px;background-repeat:no-repeat;
        }
        /* @media only screen and (min-width: 1536px) {
            iframe{
                width:1320px
            }
        } */
        @media (min-width: 1280px) and (max-width: 1535px){
        iframe{
            width:100%;
            height:680px;
            margin-right:40px
        }
        
    }
        @media (min-width: 1024px) and (max-width: 1279px){
        iframe{
            width:100%;
            height:480px;
        }
        
    }
        @media (min-width: 768px) and (max-width: 1023px){
        iframe{
            width:100%;
            height:380px;
        }
        
    }
        @media (min-width: 0px) and (max-width: 767px){
        iframe{
            width:100%;
            height:280px;
        }
        
    }
        
        
        @media (min-width: 0px) and (max-width: 767px){
        .abg{
            background:none
        }
        
    }
    .sbg{
        background:url(/images/benifitbg.png);background-size:100% 387px;background-repeat:no-repeat; background-position:0 125px
    }
    @media (min-width: 0px) and (max-width: 1023px){
        .sbg{
            background:none
        }
    }
    
    @media (min-width: 1024px) and (max-width: 1031px){
        .abg{
            background-size:100% 520px
        }
    }
    @media (min-width: 1032px) and (max-width: 1057px){
        .abg{
            background-size:100% 520px
        }
    }
    @media (min-width: 1058px) and (max-width: 1279px){
        .abg{
            background-size:100% 486px
        }
    }
    @media (min-width: 1018px) and (max-width: 1023px){
        .abg{
            background-size:100% 417px
        }
    }
    @media (min-width: 951px) and (max-width: 1017px){
        .abg{
            background-size:100% 417px
        }
    }
    @media (min-width: 858px) and (max-width: 950px){
        .abg{
            background-size:100% 417px
        }
    }
    @media (min-width: 791px) and (max-width: 857px){
        .abg{
            background-size:100% 450px
        }
    }
        
    </style>






    <div class="mt-[100px]" style="font-family:'Poppins'">
        <h1 class="text-center text-[50px] mx-5 font-bold">
            @if ($about !== null)
                {!! $about->title !!}
            @endif
        </h1>
        <p class="text-center mx-5 md:text-[24px] text-[18px] leading-normal font-normal capitalize">
            @if ($about !== null)
                {!! $about->title_description !!}
            @endif
        </p>
        <div class="abg"
            style="">
            <div class="2xl:w-[1320px] 2xl:mx-auto lg:mx-10 mx-5">
                <h1 class="text-center xl:text-[68px] lg:text-[50px]  text-[36px] font-bold capitalize lg:leading-[85px] md:leading-[50px] leading-[40px] mt-[20px] ">
                    @if ($about !== null)
                        {!! $about->heading !!}
                    @endif
                </h1>

                <p class="text-center md:text-[24px] text-[18px] md:mx-50  leading-normal font-normal mt-5">
                    @if ($about !== null)
                        {!! $about->heading_description !!}
                    @endif
                </p>



                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 grid-cols-1 mt-[20px] ">

                    @if ($about->images !== null)
                        @foreach (json_decode($about->images) as $item)
                            <img src="{{ '/storage/' . $item }}" alt="" class="rounded-lg w-full lg:w-[312px] h-[212px]">
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <p class=" mt-6 2xl:w-[1144px] 2xl:mx-auto lg:mx-10 mx-5 text-justify text-base font-normal">
            @if ($about !== null)
                {!! $about->images_description !!}
            @endif
        </p>

        {{-- <iframe height="240" controls class="lg:mx-48 mt-5 mx-20 md:w-[600px] lg:w-[960px]">
  <source src="movie.mp4" type="video/mp4">
    </iframe> --}}
        @php
            $default_video = $videos->where('default', 1)->first();
        @endphp
        <div class="mt-[50px] lg:mx-10 mx-5">
            <iframe src="{{ $default_video->embed_code }}" frameborder="0"></iframe>
        </div>


        <div class="mt-[50px] 2xl:w-[1144px] 2xl:mx-auto lg:mx-10 mx-5 px-[10px] py-[10px] lg:px-[70px] lg:py-[16px] "
            style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
            <h1 class="font-bold text-2xl">{!! $default_video->des !!} </h1>
            <p class="text-lg font-normal">{!! $default_video->title !!}</p>
        </div>

        {{-- Story  --}}
        <div class="mt-[50px] lg:flex 2xl:w-[1320px] 2xl:mx-auto lg:mx-10 mx-5">
            <div class="">
                @if ($about !== null)
                    <img src="/storage/image/about-rect1.png" alt="" class="w-full 2xl:w-[561px] h-[316px]">
                    <h1 class="-mt-44 xl:ml-10 lg:ml-8 md:ml-56 ml-16 absolute xl:text-[50px] lg:text-[40px] md:text-[50px] text-[30px] font-black text-white">{!! $about->fimg_title !!}
                @endif
            </div>
            <div class="lg:w-[735px] lg:ml-[24px]">
                <h1 class=" text-4xl font-bold">{!! $about->fimg_subtitle !!}</h1>
                <p class="text-base text-justify font-normal">
                    @if ($about !== null)
                        {!! $about->fimg_story !!}
                    @endif
                </p>
            </div>
        </div>


        <div class="lg:flex lg:flex-row flex flex-col-reverse lg:mx-10 mx-5 2xl:mx-auto mt-6 2xl:w-[1320px]">
            <div class="lg:w-[735px] lg:mr-[24px]">
                <h1 class="text-4xl font-bold">{!! $about->simg_subtitle !!}</h1>
                <p class="text-justify text-base font-normal">
                    @if ($about !== null)
                        {!! $about->simg_story !!}
                    @endif
                </p>
            </div>
            <div>
                @if ($about !== null)
                    <img src="/storage/image/about-rect2.png" alt="" class="2xl:w-[561px] w-full h-[316px]">
                    <h1 class="absolute xl:text-[50px] lg:text-[40px] md:text-[50px] text-[30px] font-black -mt-48 xl:ml-6 lg:ml-2 md:ml-56 ml-6 text-white"><span
                            class="">{!! $about->simg_title !!}
                @endif
            </div>

        </div>

        <!-- Success section start -->
        <div class="mt-[100px] pb-28 sbg"
            style="">
            <h1 class="font-bold text-[50px] text-[#212427] text-center">
                What Our Member Say
            </h1>
            <p class="text-2xl font-normal text-center mx-[20px] text-[#212427]">
                Here’s all of the successful stories of our customers
            </p>

             <!-- Component: Testimonial slider -->
        <div class="relative 2xl:w-[1320px] 2xl:mx-auto lg:mx-10 mx-5 glide-08">
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
                                                            class=" h-[304px] 2xl:w-[424px] px-2 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 overflow-hidden">
                                                            <div class="flex">
                                                                <div>
                                                                    <img src="{{ '/storage/' . $item->image }}" alt=""
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
                                                                    <p class="font-normal text-[20px]">
                                                                        {{ $item->profession }} </p>
                                                                </div>
                                                            </div>
                                                            <p
                                                                class="font-normal mx-[17px] text-justify text-base ">
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
                <button class="p-4 group" data-glide-dir="=0" aria-label="goto slide 1"><span
                        class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-[#D9D9D9] bg-[#D9D9D9] ring-2  focus:outline-none"></span></button>
                <button class="p-4 group" data-glide-dir="=1" aria-label="goto slide 2"><span
                        class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2 ring-[#D9D9D9] bg-[#D9D9D9] focus:outline-none"></span></button>
                <button class="p-4 group" data-glide-dir="=2" aria-label="goto slide 3"><span
                        class="block w-[15px] h-[15px] transition-colors duration-300 rounded-full ring-2 ring-[#D9D9D9] bg-[#D9D9D9] focus:outline-none"></span></button>
            </div>
        </div>
        </div>

        <!-- Success section end -->


         <section class=" mb-[-100px]"
            style="background:url(/images/Line2.png);background-size:100% ;background-repeat:no-repeat;background-position:center">
            <div class="pt-20 pb-28 "style="background:url(/images/lastbg.png);background-size:100%;background-repeat:no-repeat;">
                <div class="pb-28 shadow-lg">
                    <h1 class="font-bold text-[50px] text-[#212427] text-center">
                        @if ($shareStory !== null)
                            {!! $shareStory->share_title !!}
                        @endif
                    </h1>

                    <p class="text-[24px] font-normal capitalize text-center text-[#D1052C] mx-10 2xl:w-[986px] 2xl:mx-auto">
                        @if ($shareStory !== null)
                            {!! $shareStory->share_subtitle !!}
                        @endif
                    </p>
                    <a href="{{ route('share.story') }}" class=" flex justify-center items-center"><button
                            class="lg:w-48 mt-[20px] p-3 rounded-lg font-semibold  bg-[#D1052C] text-white">Share Your
                            Story</button></a>
                </div>
            </div>
        </section>
        <!-- another -->

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
