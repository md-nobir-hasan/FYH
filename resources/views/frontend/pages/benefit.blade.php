@extends('frontend.layout.app')
@push('title')
    Benefits
@endpush
@section('content')
    <div class="mt-[104px] w-[1320px] mx-auto" style="font-family:'Poppins'">
        <h1 class="text-center text-[50px] font-bold">
            @if ($benefitHeader !== null)
                {{ $benefitHeader->benefit_title }}
            @endif
        </h1>
        <p class="text-center text-2xl font-normal">
            @if ($benefitHeader !== null)
                {{ $benefitHeader->benefit_subtitle }}
            @endif
        </p>

        <!-- benifit section -->
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-5">


                @if ($Benefits->count() > 0)
                    @foreach ($Benefits as $item)
                        <a href="{{route('benefit.details',[$item->id])}}"
                            class="h-[232px] w-[424px] px-6 py-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 overflow-hidden">
                            <img src="{{ $item->image }}" alt="" class="h-[80px] w-[80px] mx-auto rounded-full p-2"
                                style="box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.08);">
                            <h5
                                class="mb-2 text-[20px] font-semibold tracking-tight text-[#212427] dark:text-white text-center">
                                {{ $item->title }} </h5>
                            <p class="font-normal text-[14px] text-[#212427] text-center">
                                {{-- {!! $item->description !!} <br> --}}
                                {!! $item->first_para !!}
                            </p>
                        </a>
                    @endforeach
                @endif


            </div>
            <!-- benifit card section end-->
        </div>
    </div>

    <!-- benifit section end -->



    </div>
    <!-- Component: Testimonial slider -->
<div class="relative w-[1320px] mx-auto glide-08">
    <!-- Slides -->
    <div class="overflow-hidden text-center bg-white rounded shadow-2xl shadow-slate-200 text-slate-500 " data-glide-el="track">
        <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
            <li>
                <div class="w-full">
                    <!-- Start Testimonial -->
                    <div class="overflow-hidden ">
                        <div class="relative p-6">
                            <figure class="relative z-10">
                                <blockquote class="p-6 text-lg leading-loose lg:text-xl">
                                    <p>Wind-ui is probably one of the best libraries I've come across. Good looking, easy to use and above all super accessible. If you haven't tried it yet just do so!</p>
                                    <h1>card</h1>
                                </blockquote>
                                
                            </figure>
                            
                        </div>
                    </div>
                    <!-- End Testimonial -->
                </div>
            </li>
            <li>
                <div class="w-full">
                    <!-- Start Testimonial -->
                    <div class="overflow-hidden">
                        <div class="relative p-6">
                            <figure class="relative z-10">
                                <blockquote class="p-6 text-lg leading-loose lg:text-xl">
                                    <p>Wind-ui components come with proper attributes to ensure full accessibility with the WAI-ARIA standards. That's just awesome for a free ui library.</p>
                                </blockquote>
                            </figure>
                            
                        </div>
                    </div>
                    <!-- End Testimonial -->
                </div>
            </li>
            <li>
                <div class="w-full">
                    <!-- Start Testimonial -->
                    <div class="overflow-hidden">
                        <div class="relative p-6">
                            <figure class="relative z-10">
                                <blockquote class="p-6 text-lg leading-loose lg:text-xl">
                                    <p>You can easily communicate with Wind-ui's team for support through their discord channel. They are responsive and ultra helpful guys!</p>
                                </blockquote>
                            </figure>
                            
                        </div>
                    </div>
                    <!-- End Testimonial -->
                </div>
            </li>
        </ul>
    </div>
    <!-- Indicators -->
    <div class="flex items-center justify-center w-full gap-2 pt-6" data-glide-el="controls[nav]">
        <button class="p-4 group" data-glide-dir="=0" aria-label="goto slide 1"><span class="block w-2 h-2 transition-colors duration-300 rounded-full opacity-70 ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
        <button class="p-4 group" data-glide-dir="=1" aria-label="goto slide 2"><span class="block w-2 h-2 transition-colors duration-300 rounded-full opacity-70 ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
        <button class="p-4 group" data-glide-dir="=2" aria-label="goto slide 3"><span class="block w-2 h-2 transition-colors duration-300 rounded-full opacity-70 ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

<script>
    var glide07 = new Glide('.glide-08', {
        type: 'slider',
        focusAt: 'center',
        perView: 1,
        autoplay: 3500,
        animationDuration: 700,
        gap: 0,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
    });

    glide07.mount();
</script>
<!-- End Testimonial slider -->

@endsection
@push('js')
    <!-- flowbite cdn -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <!-- flowbite cdn end -->
@endpush
