@extends('frontend.layout.app')
@push('title')
    FYH
@endpush
@section('content')
    <div style="font-family:'Poppins'" class="mb-[-104px]">
        <section class="mt-[100px]">
            <img src="{{ asset($mdata->banner_img) }}" alt="" class="h-[488px] w-full" />
            <div class="-mt-[300px]  absolute 2xl:ml-[400px] xl:ml-72 lg:ml-[130px] md:ml-[100px] ml-[30px]">
                <h1 class="2xl:text-[67px] lg:text-[50px] md:text-[40px] text-[36px] font-bold text-white">{{ $mdata->banner_title }}</h1>
                <p class="text-[24px] md:ml-[0px] ml-[-60px] font-normal text-white text-center">{{ $mdata->banner_des }}</p>
            </div>
        </section>
        <section class="mt-[50px]">
        @php
            $default_video = $videos->where('default', 1)->first();
        @endphp
            <div class="2xl:mx-0 md:mx-10 mx-5">
            <iframe class="2xl:mx-auto 2xl:w-[1320px] w-full lg:h-[500px]  md:h-[350px] h-[200px] xl:h-[741px]"  src="{{ $default_video->embed_code }}">
            </iframe>
            </div>
            <h1 class="2xl:text-[50px] md:text-[36px] text-[24px] font-bold mt-[20px] 2xl:w-[1320px] mx-5 md:mx-10 2xl:mx-auto">{{ $default_video->title }}</h1>
            <p class="2xl:text-2xl lg:text-[18px] text-[16px] font-semibold uppercase 2xl:w-[1320px] md:mx-10 mx-5 2xl:mx-auto">{{ $default_video->des }}</p>
        </section>
        <section class="mt-[50px]">
            <div class="grid grid-cols-1 2xl:w-[1320px] gap-6 mx-auto lg:grid-cols-3 md:grid-cols-2">
                @foreach ($videos->where('default', null) as $video)
                    <div>
                        <div class="2xl:mx-0 md:mx-10 mx-5">
                        <iframe class="mx-auto rounded-2xl w-full 2xl:w-[424px] h-[247px]" src="{{ $video->embed_code }}">
                        </iframe>
                        </div>
                        <h1 class="font-semibold xl:text-2xl lg:text-lg text-[18px] uppercase mt-4 md:mx-10 2xl:mx-0 mx-5 2xl:ml-2 text-[#212427]">
                            {{ $video->title }}
                        </h1>
                        <p class="2xl:ml-2 2xl:mx-0 md:mx-10 mx-5 text-sm font-normal">
                            {{ $video->des }}
                        </p>
                    </div>
                @endforeach

                {{-- <div>
                    <iframe class="mx-auto rounded-2xl" width="424" height="247"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    <h1 class="font-semibold text-2xl uppercase mt-4 ml-2 text-[#212427]">Guidence from Thomas tsangaras
                    </h1>
                    <p class="ml-2 text-sm font-normal">Here goes a short description about this video. </p>
                </div>
                <div>
                    <div>
                        <iframe class="mx-auto rounded-2xl" width="424" height="247"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                        <h1 class="font-semibold text-2xl uppercase mt-4 ml-2 text-[#212427]">Guidence from Thomas tsangaras
                        </h1>
                        <p class="ml-2 text-sm font-normal">Here goes a short description about this video. </p>
                    </div>
                <div> --}}
        </section>
    </div>
@endsection
@push('js')
@endpush
