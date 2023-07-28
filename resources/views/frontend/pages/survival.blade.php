@extends('frontend.layout.app')
@push('title')
    FYH
@endpush
@section('content')
    <div style="font-family:'Poppins'" class="mb-[-104px]">
        <section class="mt-[100px]">
            <img src="{{ asset($mdata->banner_img) }}" alt="" class="h-[488px] w-[1920px]" />
            <div class="-mt-[300px] absolute ml-96">
                <h1 class="text-[67px] font-bold text-white">{{ $mdata->banner_title }}</h1>
                <p class="text-[24px] font-normal text-white text-center">{{ $mdata->banner_des }}</p>
            </div>
        </section>
        <section class="mt-[50px]">
        @php
            $default_video = $videos->where('default', 1)->first();
        @endphp
            <iframe class="mx-auto" width="1320" height="741" src="{{ $default_video->embed_code }}">
            </iframe>
            <h1 class="text-[50px] font-bold mt-[20px] w-[1320px] mx-auto">{{ $default_video->title }}</h1>
            <p class="text-2xl font-semibold uppercase w-[1320px] mx-auto">{{ $default_video->des }}</p>
        </section>
        <section class="mt-[50px]">
            <div class="grid grid-cols-1 w-[1320px] gap-6 mx-auto lg:grid-cols-3 md:grid-cols-2">
                @foreach ($videos->where('default', null) as $video)
                    <div>
                        <iframe class="mx-auto rounded-2xl" width="424" height="247" src="{{ $video->embed_code }}">
                        </iframe>
                        <h1 class="font-semibold text-2xl uppercase mt-4 ml-2 text-[#212427]">
                            {{ $video->title }}
                        </h1>
                        <p class="ml-2 text-sm font-normal">
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
